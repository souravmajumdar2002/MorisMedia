<!-- calender start -->
<div class="mycalender_wrap">
    <div class="my_calender">
        <div class="custom_container">
            <div class="scroll_area">
                <div class="row1">
                    <div class="calender_topsec">
                        <div class="leftsec">
                            <span class="search_by">This Week</span>
                            <div class="arrow_box">
                                <span class="arrow"><img src="{{asset('assets/images/my-calender/icon_lft_arrow.svg')}}" alt="icon arrow left" /></span>
                                <span class="arrow"><img src="{{asset('assets/images/my-calender/icon_rgt_arrow.svg')}}" alt="icon arrow rgt" /></span>
                            </div>
                            <div class="date">{{ $monthName }} , {{ $currentYear }}</div>
                        </div>
                        <div class="rightsec">
                            <div class="filter_by">
                                <select class="ui search dropdown dropdownmenu select-style" id="selectField">
                                    <option value="1">Day</option>
                                    <option value="2" selected>Week</option>
                                    <option value="3">Month</option>
                                    <option value="4">year</option>
                                </select>
                            </div>
                            <span class="time"><img src="{{asset('assets/images/my-calender/icon_countdown.svg')}}" alt="icon time" /> Yet to Respond</span>
                            <span class="print"><img src="{{asset('assets/images/my-calender/icon_print.svg')}}" alt="icon print" /></span>
                            <strong class="more_option"><span></span></strong>
                        </div>
                    </div>
					==================
					
					
					
					<!--<table>
        <thead>
            <tr>
                @foreach($daysOfWeek as $day)
                    <th>{{ $day }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 6; $i++)
                <tr>
                    @for ($j = 0; $j < 7; $j++)
                        @php
                            $dayNumber = $i * 7 + $j - $startDayOfWeek + 2;
                        @endphp
                        <td>
                            @if ($dayNumber >= 1 && $dayNumber <= $daysInMonth)
                                {{ $dayNumber }}
                            @endif
                        </td>
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>-->
					
					
					
					
					==================
                    <div class="calender_content">
                        <!-- day_calender start -->
                        <div class="c_data week_calender day_wise d1">
                            <div class="fixed_time">
                                <div class="column">
                                    IST <br />
                                    04:00
                                </div>
                                <div class="column">09:00</div>
                                <div class="column">10:00</div>
                                <div class="column">11:00</div>
                                <div class="column">12:00</div>
                                <div class="column">13:00</div>
                            </div>
                            <div class="make_booking">
                                <div class="column th">Wednesday, 12 October 2023</div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pink2">09:00 - 09:15</span>
                                        <span class="b_time lightprpl2">09:15 - 09:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time lightprpl full_height">Design Team Metting</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{asset('assets/images/my-calender/icon_edit.svg')}}" alt="icon edit" /></span>
                                                <span><img src="{{asset('assets/images/my-calender/icon_delete.svg')}}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{asset('assets/images/my-calender/icon_cross.svg')}}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>Design Team Metting</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color: #6e1588;"></li>
                                                        <li style="background-color: #e1003e;"></li>
                                                        <li style="background-color: #2b99f0;"></li>
                                                        <li style="background-color: #fe2924;"></li>
                                                        <li style="background-color: #a41e90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{asset('assets/images/my-calender/icon_calender.svg')}}" alt="icon calender" /> Friday, 14th October 2023</strong>
                                                    <strong class="app_time"><img src="{{asset('assets/images/my-calender/icon_watch.svg')}}" alt="icon watch" /> 11 : 00 Am - 11 : 15 Am <span>Asia / Kolkata</span></strong>
                                                    <strong class="app_zoom">
                                                        <img src="{{asset('assets/images/my-calender/icon_zoom.png')}}" alt="icon zoom" /> Zoom Platform
                                                        <span><img src="images/my-calender/icon_attachment.svg')}}" alt="icon attachment" /> Copy Link</span>
                                                    </strong>
                                                    <strong class="app_bymail"><img src="{{asset('assets/images/my-calender/icon_clock.svg')}}" alt="icon clock" /> 15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">
                                                        Attendees <strong><img src="{{asset('assets/images/my-calender/icon_user.png')}}" /> 10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time lightgreen"></span>
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time green2">10:30 - 10:45</span>
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time"></span>
                                        <span class="b_time"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time yellow">sales constellation</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{asset('assets/images/my-calender/icon_edit.svg')}}" alt="icon edit" /></span>
                                                <span><img src="{{asset('assets/images/my-calender/icon_delete.svg')}}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{asset('assets/images/my-calender/icon_cross.svg')}}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>sales constellation</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color: #6e1588;"></li>
                                                        <li style="background-color: #e1003e;"></li>
                                                        <li style="background-color: #2b99f0;"></li>
                                                        <li style="background-color: #fe2924;"></li>
                                                        <li style="background-color: #a41e90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{asset('assets/images/my-calender/icon_calender.svg')}}" alt="icon calender" /> Tuesday, 11th October 2023</strong>
                                                    <strong class="app_time"><img src="{{asset('assets/images/my-calender/icon_watch.svg')}}" alt="icon watch" /> 11 : 00 Am - 11 : 15 Am <span>Asia / Kolkata</span></strong>
                                                    <strong class="app_zoom">
                                                        <img src="{{asset('assets/images/my-calender/icon_zoom.png')}}" alt="icon zoom" /> Zoom Platform
                                                        <span><img src="{{asset('assets/images/my-calender/icon_attachment.svg')}}" alt="icon attachment" /> Copy Link</span>
                                                    </strong>
                                                    <strong class="app_bymail"><img src="{{asset('assets/images/my-calender/icon_clock.svg')}}" alt="icon clock" /> 15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">
                                                        Attendees <strong><img src="{{asset('assets/images/my-calender/icon_user.png')}}" /> 10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                        <span class="b_time"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pink3">12:00 - 12:15</span>
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time green2"></span>
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pingdrk">Logo Designing Discussion</span>
                                        <!-- mcalender_popup start -->
                                        <div class="mcalender_popup">
                                            <div class="top_option">
                                                <span><img src="{{asset('assets/images/my-calender/icon_edit.svg')}}" alt="icon edit" /></span>
                                                <span><img src="{{asset('assets/images/my-calender/icon_delete.svg')}}" alt="icon delete" /></span>
                                                <span class="close_btn"><img src="{{asset('assets/images/my-calender/icon_cross.svg')}}" alt="icon cross" /></span>
                                            </div>
                                            <div class="row_two">
                                                <div class="eventcolor">
                                                    <span class="roundcolor"></span>
                                                </div>
                                                <h3>Logo Designing Discussion</h3>
                                                <div class="choosecolor">
                                                    <ul>
                                                        <li style="background-color: #6e1588;"></li>
                                                        <li style="background-color: #e1003e;"></li>
                                                        <li style="background-color: #2b99f0;"></li>
                                                        <li style="background-color: #fe2924;"></li>
                                                        <li style="background-color: #a41e90;"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="content_area">
                                                <div class="top_details">
                                                    <strong class="app_date"><img src="{{asset('assets/images/my-calender/icon_calender.svg')}}" alt="icon calender" /> Wednesday, 12th October 2023</strong>
                                                    <strong class="app_time"><img src="{{asset('assets/images/my-calender/icon_watch.svg')}}" alt="icon watch" /> 11 : 00 Am - 11 : 15 Am <span>Asia / Kolkata</span></strong>
                                                    <strong class="app_zoom">
                                                        <img src="{{asset('assets/images/my-calender/icon_zoom.png')}}" alt="icon zoom" /> Zoom Platform
                                                        <span><img src="{{asset('assets/images/my-calender/icon_attachment.svg')}}" alt="icon attachment" /> Copy Link</span>
                                                    </strong>
                                                    <strong class="app_bymail"><img src="{{asset('assets/images/my-calender/icon_clock.svg')}}" alt="icon clock" /> 15 min before by Email</strong>
                                                </div>
                                                <div class="attendees">
                                                    <div class="bg_white">
                                                        Attendees <strong><img src="{{asset('assets/images/my-calender/icon_user.png')}}" /> 10</strong>
                                                    </div>
                                                </div>
                                                <ul class="user_info">
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>chaitanya@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>sanatariq@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                    <li>
                                                        <img src="{{asset('assets/images/my-calender/icon_user2.png')}}" alt="icon user" />
                                                        <strong>harpreet.k@morismedia.in</strong>
                                                        <span class="check"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- mcalender_popup end -->
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time green2"></span>
                                        <span class="b_time lightgreen"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--day_calender end -->
                        <!-- week_calender start -->
                        <div class="c_data week_calender d2">
                            <div class="fixed_time">
                                <div class="column">
                                    IST <br />
                                    04:00
                                </div>
                                <div class="column">09:00</div>
                                <div class="column">10:00</div>
                                <div class="column">11:00</div>
                                <div class="column">12:00</div>
                                <div class="column">13:00</div>
                                <div class="column">14:00</div>
                            </div>
                            @foreach($daysOfWeek as $day)
								<div class="make_booking">
									<div class="column th"><span>10</span>{{$day}}</div>
									<div class="column">
										<div class="td1">
											<span class="b_time pink">09:00 - 09:15</span>
											<span class="b_time pink">09:15 - 09:30</span>
										</div>
										<div class="td2">
											<span class="b_time pink">09:30 - 09:45</span>
											<span class="b_time pink">09:45 - 10:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time lightgreen">10:00 - 10:15</span>
											<span class="b_time lightgreen">10:15 - 10:30</span>
										</div>
										<div class="td2">
											<span class="b_time lightgreen">10:30 - 10:45</span>
											<span class="b_time lightgreen">10:45 - 11:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">11:00 - 11:15</span>
											<span class="b_time">11:15 - 11:30</span>
										</div>
										<div class="td2">
											<span class="b_time">11:30 - 11:45</span>
											<span class="b_time">11:45 - 12:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">12:00 - 12:15</span>
											<span class="b_time">12:15 - 12:30</span>
										</div>
										<div class="td2">
											<span class="b_time">12:30 - 12:45</span>
											<span class="b_time">12:45 - 13:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">13:00 - 13:15</span>
											<span class="b_time">13:15 - 13:30</span>
										</div>
										<div class="td2">
											<span class="b_time">13:30 - 13:45</span>
											<span class="b_time">13:45 - 14:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">14:00 - 14:15</span>
											<span class="b_time">14:15 - 14:30</span>
										</div>
										<div class="td2">
											<span class="b_time">14:30 - 14:45</span>
											<span class="b_time">14:45 - 15:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">15:00 - 15:15</span>
											<span class="b_time">15:15 - 15:30</span>
										</div>
										<div class="td2">
											<span class="b_time">15:30 - 15:45</span>
											<span class="b_time">15:45 - 16:00</span>
										</div>
									</div>
									<div class="column">
										<div class="td1">
											<span class="b_time">16:00 - 16:15</span>
											<span class="b_time">14:15 - 14:30</span>
										</div>
										<div class="td2">
											<span class="b_time">16:30 - 16:45</span>
											<span class="b_time">16:45 - 17:00</span>
										</div>
									</div>
								</div>
							@endforeach
							<!--<div class="make_booking">
                                <div class="column th"><span>9</span>Sun</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                                <div class="column unavailable"><img src="{{asset('assets/images/my-calender/icon_unavailable.svg')}}" alt="icon unavailable" />Unavailable</div>
                            </div>-->
                            <!--<div class="make_booking">
                                <div class="column th"><span>10</span> Mon</div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time pink">09:00 - 09:15</span>
                                        <span class="b_time pink">09:15 - 09:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time pink">09:30 - 09:45</span>
                                        <span class="b_time pink">09:45 - 10:00</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time lightgreen">10:00 - 10:15</span>
                                        <span class="b_time lightgreen">10:15 - 10:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time lightgreen">10:30 - 10:45</span>
                                        <span class="b_time lightgreen">10:45 - 11:00</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time">11:00 - 11:15</span>
                                        <span class="b_time">11:15 - 11:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time">11:30 - 11:45</span>
                                        <span class="b_time">11:45 - 12:00</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time">12:00 - 12:15</span>
                                        <span class="b_time">12:15 - 12:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time">12:30 - 12:45</span>
                                        <span class="b_time">12:45 - 13:00</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time">13:00 - 13:15</span>
                                        <span class="b_time">13:15 - 13:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time">13:30 - 13:45</span>
                                        <span class="b_time">13:45 - 14:00</span>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="td1">
                                        <span class="b_time">14:00 - 14:15</span>
                                        <span class="b_time">14:15 - 14:30</span>
                                    </div>
                                    <div class="td2">
                                        <span class="b_time">14:30 - 14:45</span>
                                        <span class="b_time">14:45 - 15:00</span>
                                    </div>
                                </div>
                            </div>-->
                            </div>
                        <!--week_calender end -->
                        <!-- month_calender start -->
                        <div class="c_data month_calender d3">
                            <div class="full_row month_row">
                                <div class="th">SUNDAY</div>
                                <div class="th">MONDAY</div>
                                <div class="th">TUESDAY</div>
                                <div class="th">WEDNESDAY</div>
                                <div class="th">THURSDAY</div>
                                <div class="th">FRIDAY</div>
                                <div class="th">SATURDAY</div>
                            </div>
                            <div class="full_row days_row">
                                <div class="td"><span class="date">11</span></div>
                                <div class="td"><span class="date">2</span></div>
                                <div class="td"><span class="date">3</span></div>
                                <div class="td"><span class="date">4</span></div>
                                <div class="td">
                                    <span class="date not_show">5</span>
                                    <div class="event_label">Sales Constellation</div>
                                </div>
                                <div class="td"><span class="date">6</span></div>
                                <div class="td"><span class="date">7</span></div>
                            </div>
                            <div class="full_row days_row">
                                <div class="td"><span class="date">8</span></div>
                                <div class="td"><span class="date">9</span></div>
                                <div class="td"><span class="date">10</span></div>
                                <div class="td"><span class="date">11</span></div>
                                <div class="td"><span class="date">12</span></div>
                                <div class="td"><span class="date">13</span></div>
                                <div class="td"><span class="date">14</span></div>
                            </div>
                            <div class="full_row days_row">
                                <div class="td"><span class="date">15</span></div>
                                <div class="td"><span class="date">16</span></div>
                                <div class="td"><span class="date">17</span></div>
                                <div class="td"><span class="date">18</span></div>
                                <div class="td"><span class="date">19</span></div>
                                <div class="td"><span class="date">20</span></div>
                                <div class="td"><span class="date">21</span></div>
                            </div>
                            <div class="full_row days_row">
                                <div class="td"><span class="date">22</span></div>
                                <div class="td"><span class="date">23</span></div>
                                <div class="td">
                                    <span class="date">24</span>
                                    <div class="event_label blue">Logo Work Discussion</div>
                                </div>
                                <div class="td"><span class="date">25</span></div>
                                <div class="td"><span class="date">26</span></div>
                                <div class="td"><span class="date">27</span></div>
                                <div class="td"><span class="date">28</span></div>
                            </div>
                            <div class="full_row days_row">
                                <div class="td"><span class="date">29</span></div>
                                <div class="td"><span class="date">30</span></div>
                                <div class="td"><span class="date">31</span></div>
                                <div class="td"><span class="date"></span></div>
                                <div class="td"><span class="date"></span></div>
                                <div class="td"><span class="date"></span></div>
                                <div class="td"><span class="date"></span></div>
                            </div>
                        </div>
                        <!-- month_calender end -->
                        <!-- year_calender start -->
                        <div class="c_data year_calender d4">
                            <div class="common">
                                <h4 class="m_text"><span>January 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>February 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td booked">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td booked">25</div>
                                    <div class="td">26</div>
                                    <div class="td booked">27</div>
                                    <div class="td">28</div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>March 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td booked">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td booked">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td booked">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td booked">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>April 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>May 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>June 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td booked">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td booked">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td booked">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td booked">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>July 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td booked">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td booked">16</div>
                                    <div class="td">17</div>
                                    <div class="td booked">18</div>
                                    <div class="td booked">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>August 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>September 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td booked">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td booked">11</div>
                                    <div class="td">12</div>
                                    <div class="td booked">13</div>
                                    <div class="td booked">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>October 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td booked">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td booked">18</div>
                                    <div class="td">19</div>
                                    <div class="td booked">20</div>
                                    <div class="td booked">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td bg_circle"><span>23</span></div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>November 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td booked">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td booked">9</div>
                                    <div class="td">10</div>
                                    <div class="td booked">11</div>
                                    <div class="td booked">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                            <div class="common">
                                <h4 class="m_text"><span>December 2023</span></h4>
                                <div class="full_row month_row">
                                    <div class="th">S</div>
                                    <div class="th">M</div>
                                    <div class="th">T</div>
                                    <div class="th">W</div>
                                    <div class="th">T</div>
                                    <div class="th">F</div>
                                    <div class="th">S</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">1</div>
                                    <div class="td">2</div>
                                    <div class="td">3</div>
                                    <div class="td">4</div>
                                    <div class="td">5</div>
                                    <div class="td">6</div>
                                    <div class="td">7</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">8</div>
                                    <div class="td">9</div>
                                    <div class="td">10</div>
                                    <div class="td">11</div>
                                    <div class="td">12</div>
                                    <div class="td">13</div>
                                    <div class="td">14</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">15</div>
                                    <div class="td">16</div>
                                    <div class="td">17</div>
                                    <div class="td">18</div>
                                    <div class="td">19</div>
                                    <div class="td">20</div>
                                    <div class="td">21</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">22</div>
                                    <div class="td">23</div>
                                    <div class="td">24</div>
                                    <div class="td">25</div>
                                    <div class="td">26</div>
                                    <div class="td">27</div>
                                    <div class="td">28</div>
                                </div>
                                <div class="full_row days_row">
                                    <div class="td">29</div>
                                    <div class="td">30</div>
                                    <div class="td">31</div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                    <div class="td"></div>
                                </div>
                            </div>
                        </div>
                        <!-- year_calender end -->
                    </div>
                </div>
            </div>
            <div class="nextbtn_row">
                <div class="slot_selected">
                    <span class="slot_btn">12 time slot selected</span>
                    <div class="slot_popup">
                        <div class="toprow">
                            <strong class="t_heading"><img src="{{asset('assets/images/my-calender/icon_calender.svg')}}" alt="icon calender" /> Selected Time Slots</strong>
                            <span class="clear_all">CLEAR ALL</span>
                        </div>
                        <div class="slot_time">
                            <strong class="date">MONDAY, OCTOBER 10 2023</strong>
                            <ul>
                                <li>
                                    11 : 00 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 15 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 30 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 45 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    12 : 00 PM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    12 : 15 PM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    12 : 30 PM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    12 : 45 PM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                            </ul>
                        </div>
                        <div class="slot_time">
                            <strong class="date">TUESDAY, OCTOBER 10 2023</strong>
                            <ul>
                                <li>
                                    11 : 00 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 15 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 30 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                                <li>
                                    11 : 45 AM <span class="cross"><img src="{{asset('assets/images/my-calender/icon_cross2.svg')}}" alt="icon cross" /></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="select-event.html" class="next">NEXT</a>
            </div>
        </div>
    </div>
</div>
<!-- calender end -->
