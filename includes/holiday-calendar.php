<?php
class Holidays
{
    private $holidays_options;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'holidays_add_plugin_page'));
        add_action('admin_init', array($this, 'holidays_page_init'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_assets'));

        add_action('wp_ajax_nopriv_update_holidays', array($this, 'update_holidays'));
        add_action('wp_ajax_update_holidays', array($this, 'update_holidays'));

        // add_action('rest_api_init', function () {
        //     register_rest_route('dg-holidays/v1', 'get-holidays', array(
        //         'methods'  => 'GET',
        //         'callback' => array($this, 'get_dg_holidays')
        //     ));
        // });
        // add_action('rest_api_init', array($this, 'holidays_api'));
    }

    public function enqueue_assets()
    {
        wp_enqueue_script('fullcalendar-main', 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js', array(), '5.10.2', true);
        wp_enqueue_style('fullcalendar-css', 'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css', array(), '5.10.2');
      
        wp_enqueue_style('holidays-css', get_stylesheet_directory_uri() . '/css/holiday-calendar.css', array(), '1.0.0');
    }

    public function holidays_add_plugin_page()
    {
        add_management_page(
            'Holidays', // page_title
            'Holidays', // menu_title
            'manage_options', // capability
            'holidays', // menu_slug
            array($this, 'holidays_create_admin_page') // function
        );
    }

    public function holidays_create_admin_page()
    {
        $this->holidays_options = get_option('dg_holidays');
        $default_tab = null;
        $tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
?>

        <div class="wrap">

            <!-- <nav class="nav-tab-wrapper">
                <a href="?page=holidays" class="nav-tab <?php if ($tab === null) : ?>nav-tab-active<?php endif; ?>">Calendar</a>
                <a href="?page=holidays&tab=settings" class="nav-tab <?php if ($tab === 'settings') : ?>nav-tab-active<?php endif; ?>">Settings</a>
                <a href="?page=holidays&tab=tools" class="nav-tab <?php if ($tab === 'tools') : ?>nav-tab-active<?php endif; ?>">Tools</a>
            </nav>
            <div class="tab-content"> -->
                <?php 
                // switch ($tab):
                //     case 'settings':
                //         echo 'Test';
                //         break;
                //     default: ?>
                        <h2>Holidays</h2>
                        <p>Mark the holidays and this feature will adjust the delivery dates accordingly. </p>
                        <?php settings_errors(); ?>

                        <form method="post" action="options.php">
                            <div id='holiday_calendar'></div>
                            <input type="hidden" id="current_holidays" value='<?php echo $this->holidays_options ?>' />
                           
                            <button style="margin-top: 20px;" type="button" id="update_holidays" class="button button-primary">Save Holidays</button>
                            
                        </form>
                <?php // break;
                // endswitch; ?>

            <!-- </div> -->
            <?php
            // settings_fields('holidays_option_group');
            // do_settings_sections('holidays-admin');
            ?>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                var calendarEl = document.getElementById("holiday_calendar");
                var updateBtn = document.getElementById("update_holidays");
                var currentHolidays = document.getElementById("current_holidays");
                var selectedDays = [];
                var holidays = [];
                if (currentHolidays.value != '' && JSON.parse(currentHolidays.value)) {
                    console.log(JSON.parse(currentHolidays.value));

                    holidays = JSON.parse(currentHolidays.value).map(function(holiday) {
                        var startDate = new Date(holiday);
                        let obj = {
                            start: holiday,
                            overlap: false,
                            display: 'background'
                        }
                        return obj;
                    });
                }

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: "dayGridMonth",
                    selectable: true,
                    unselectAuto: false,
                    // events: '/wp-json/dg-holidays/v1/get-holidays',
                    events: function(fetchInfo, successCallback, failureCallback) {
                        jQuery.ajax({
                            url: '/wp-json/dg-holidays/v1/get-holidays',
                            type: 'GET',
                            dataType: 'json',
                            success: function(result) {
                                console.log(result.data);
                                let events = JSON.parse(result.data).map(function(val){
                                    return {
                                        start: val,
                                        overlap: false,
                                        display: 'background'
                                    }
                                });
                                successCallback(events);
                            }
                        });
                    },
                    eventColor: '#b01c1c',
                    eventContent: function(event){
                        console.log(event)
                    },
                    select: function(info) {
                        let calendarEvents = calendar.getEvents();
                        console.log(calendarEvents.some(e => e.startStr === info.startStr))
                        if (!calendarEvents.some(e => e.startStr === info.startStr)) {
                            holidays.push({
                                start: info.startStr,
                                end: info.endStr,
                                overlap: false,
                                display: 'background'
                            });
                        } else {
                            console.log('already exist')
                            let removableIndex = holidays.findIndex(holiday => {
                                return holiday.start === info.startStr;
                            });
                            holidays.splice(removableIndex, 1);
                        }
                    },
                    unselect: function(info) {
                        console.log('unselect')
                    }
                });
                calendar.render();

                updateBtn.addEventListener('click', () => {
                    console.log('clicking');
                    let newHolidays = [];
                    holidays.map(function(holiday) {
                        newHolidays.push(holiday.start);
                    })
                    jQuery.ajax({
                        url: myAjax.ajaxurl,
                        data: {
                            action: 'update_holidays',
                            holidays: newHolidays
                        },
                        method: 'POST', //Post method
                        success: function(response) {
                            console.log(response)
                            currentHolidays.value = response;
                            calendar.refetchEvents();
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    })
                });
            });
        </script>
        <style>
            .fc-highlight.fc-state-highlight {
                background-color: #e1b8b9;
            }
        </style>
<?php }

    public function holidays_page_init()
    {
        register_setting(
            'holidays_option_group', // option_group
            'holidays_option_name', // option_name
        );
    }

    public function update_holidays()
    {
        if (!is_user_logged_in()) {
            return;
        }
        $holidays = $_POST['holidays'];
        update_option('dg_holidays', json_encode($holidays));
        echo get_option('dg_holidays');
        wp_die();
    }

    public function holidays_api()
    {
        register_rest_route('wp/v2', 'holidays', array(
            'methods'  => 'GET',
            'callback' => 'get_dg_holidays'
        ));
    }

    public function get_dg_holidays()
    {
        wp_send_json_success( get_option('dg_holidays'));
        wp_die();
    }
}
if (is_admin())
    $holidays = new Holidays();

/* 
 * Retrieve this value with:
 * $holidays_options = get_option( 'holiday_day_count' ); // Array of All Options
 * $holidays_0 = $holidays_options['holidays_0']; // Holidays
 */

function delivery_eta($product_id = '')
{
    if(empty($product_id)){
	    global $product;
	    $product_id = $product->get_id();
    }

	$delivery_sort_order = get_post_meta($product_id, 'delivery_sort_order_if_stock', true);
	
    if(empty($delivery_sort_order)){
        return;
    }

    $day_half = current_time('H') < 12 ? 'early' : 'late';
	$current_day = strtolower(current_time('l'));
	$delivery_hours = array(
		1 => array(
			'monday_early' => 24,
			'monday_late' => 36,
			'tuesday_early' => 24,
			'tuesday_late' => 36,
			'wednesday_early' => 24,
			'wednesday_after' => 36,
			'thursday_early' => 24,
			'thursday_late' => 36,
			'friday_early' => 24,
			'friday_late' => 36,
			'saturday_early' => 24,
			'saturday_late' => 12,
			'sunday_early' => 1,
			'sunday_late' => 1
		),
		2 => array(
			'monday_early' => 144,
			'monday_late' => 156,
			'tuesday_early' => 144,
			'tuesday_late' => 156,
			'wednesday_early' => 144,
			'wednesday_after' => 156,
			'thursday_early' => 144,
			'thursday_late' => 156,
			'friday_early' => 144,
			'friday_late' => 156,
			'saturday_early' => 144,
			'saturday_late' => 121,
			'sunday_early' => 121,
			'sunday_late' => 121
		),
		3 => array(
			'monday_early' => 480,
			'monday_late' => 480,
			'tuesday_early' => 480,
			'tuesday_late' => 480,
			'wednesday_early' => 480,
			'wednesday_after' => 480,
			'thursday_early' => 480,
			'thursday_late' => 480,
			'friday_early' => 480,
			'friday_late' => 480,
			'saturday_early' => 480,
			'saturday_late' => 480,
			'sunday_early' => 480,
			'sunday_late' => 480
		),
		4 => array(
			'monday_early' => 720,
			'monday_late' => 720,
			'tuesday_early' => 720,
			'tuesday_late' => 720,
			'wednesday_early' => 720,
			'wednesday_after' => 720,
			'thursday_early' => 720,
			'thursday_late' => 720,
			'friday_early' => 720,
			'friday_late' => 720,
			'saturday_early' => 720,
			'saturday_late' => 720,
			'sunday_early' => 720,
			'sunday_late' => 720
		),
		5 => array(
			'monday_early' => 1200,
			'monday_late' => 1200,
			'tuesday_early' => 1200,
			'tuesday_late' => 1200,
			'wednesday_early' => 1200,
			'wednesday_after' => 1200,
			'thursday_early' => 1200,
			'thursday_late' => 1200,
			'friday_early' => 1200,
			'friday_late' => 1200,
			'saturday_early' => 1200,
			'saturday_late' => 1200,
			'sunday_early' => 1200,
			'sunday_late' => 1200
		),
		8 => array(
			'monday_early' => 960,
			'monday_late' => 960,
			'tuesday_early' => 960,
			'tuesday_late' => 960,
			'wednesday_early' => 960,
			'wednesday_after' => 960,
			'thursday_early' => 960,
			'thursday_late' => 960,
			'friday_early' => 960,
			'friday_late' => 960,
			'saturday_early' => 960,
			'saturday_late' => 960,
			'sunday_early' => 960,
			'sunday_late' => 960
		),
	);
	$eta_hours = $delivery_hours[$delivery_sort_order][$current_day . '_' . $day_half];
    
    $holidays = get_option('dg_holidays');

	$raw_delivery = date(get_option('date_format') . ' ' . get_option('time_format'), strtotime('+' . $eta_hours . ' hours'));

    echo $raw_delivery;
    // print_r(getDatesFromRange(current_time('Y-m-d'), date($raw_delivery, strtotime('-1day'))));
}

function getDatesFromRange($start, $end, $format = 'Y-m-d') {
      
    // Declare an empty array
    $array = array();
      
    // Variable that store the date interval
    // of period 1 day
    $interval = new DateInterval('P1D');
  
    $realEnd = new DateTime($end);
    $realEnd->add($interval);
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);
  
    // Use loop to store date into array
    foreach($period as $date) {                 
        $array[] = $date->format($format); 
    }
  
    // Return the array elements
    return $array;
}
