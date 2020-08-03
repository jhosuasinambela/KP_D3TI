<?php
namespace common\abstracts;

/**
 * Abstract class untuk class schedule yang digunakan untuk meng-query data schedule termasuk schedule kuliah.
 *
 * Parameter fungsi standard adalah start dan end yang merupakan element dari paratameter $options
 * type data-nya adalah date sesuai format SQL yyyy-mm-dd
 *
 * type data yang dikembalikan/return harus sesuai dengan struktur data fullcalendar, grouped by calendar
 * Atrribut dibawah ini adalah attribut utama (* = required)
 * ~~~
 * [
 * 		[
 * 			'calendarId' => '123123',
 * 			'calendarName' => 'Jadwal Kuliah',
 * 			'events' => [
 * 				[
 * 					'id' => '',
 * 					'calendar' => ['id_calendar', 'label'],//id_nama_unique calendar', //cth. jadwal_kuliah
 * 				 	'title' => 'title event', //* required
 * 				  'start' => '2016-01-12T10:30:00', //*required .. jika waktu tidak ada maka akan dianggap jadi all day event
 * 				  'end' => '',
 * 				  'allDay' => true|false,
 * 				  'location' => 'GD512', //bukan bagian dari full calendar tapi dibutuhkan oleh system-x
 * 				  'invitess' => [
 * 						   'MMS', 'GIW', 'Edwin Sidjabat', 'sahat.gultom@del.ac.id'
 * 					], //bukan bagian dari full calendar tetapi dibutuhkan oleh system-x
 * 				],
 * 				[//..next event...]
 * 			]
 * 		],
 * 		[//...next calendar...]
 * ]
 * ~~~
 *
 * NOTE: query harus memperhatikan, bahwa semua event yang direturn harus berasal dari calendar yang disubscribe oleh
 * user tersebut atau calendar yang bersifat public.
 *
 * parameter lengkapnya ada di http://fullcalendar.io/docs/event_data/Event_Object/
 *
 * @author Marojahan Sigiro <marojahan@del.ac.id>
 * @since 0.1
 */

abstract class ScheduleAbstract {
   /**
    * fungsi untuk mengambil jadwal by course code e.g. CCE331234
    * options
    * ~~~
    * [
    * 	'start' => '2016-01-12', //*required .. date start (no time)
    * 	'duration' => 'int' //start + n days
    *   'end' => '2016-01-15', //end date
    * ]
    * @param  [type] $courseCode [description]
    * @param  array  $options    options start end
    * @return array             events data
    */
   abstract protected function getScheduleByCourseCode($courseCode, $options=[]);

   abstract protected function getScheduleByUserId($userId, $options=[]);

   abstract protected function getScheduleByLocationId($locationId, $options=[]);

   abstract protected function getScheduleByKelasId($kelasId, $options=[]);

   abstract protected function getScheduleAll($options=[]);

   /**
    * get schedule by calendar, multiple calendar is possible so $calendarIds is an array
    * @param  array $calendarIds Array of calendar Id
    * @param  array  $options    start end options
    * @return array 			events data
    */
   abstract protected function getScheduleByCalendarId($calendarIds, $options=[]);

}
