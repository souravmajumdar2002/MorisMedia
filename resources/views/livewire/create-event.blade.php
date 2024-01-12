<!-- calender start -->
<div class="mycalender_wrap">
    <div class="my_calender">
        <div class="custom_container">
            <div class="scroll_area">
                <div class="row1">
                    <div>
                        <h2>Add Calendar Events</h2>
                        <hr />
                        <form wire:submit.prevent="saveEvent">
                            <div class="form-group">
                                <label for="calendar_type">Type:</label>
                                <select class="form-control" id="type" name="type" wire:model="calendar_type">
                                    <option value="default" selected>Default</option>
                                    <option value="event">Event</option>
                                    <option value="mycalendar">My Calendar</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="meeting_address">Meeting Address:</label>
                                <input type="text" class="form-control" id="meeting_address" name="meeting_address" wire:model="meeting_address" />
                            </div>

                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" wire:model="location" />
                            </div>

                            <div class="form-group">
                                <label for="calendar_type">Calendar Type:</label>
                                <select class="form-control" id="calendar_type" name="calendar_type" wire:model="calendar_type">
                                    <option value="owner" selected>Owner</option>
                                    <option value="client">Client</option>
                                    <option value="user">User</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="language">Language:</label>
                                <input type="text" class="form-control" id="language" name="language" wire:model="language" />
                            </div>

                            <div class="form-group">
                                <label for="all_day">Is it an All-day Event?</label>
                                <div>
                                    <label class="mr-3"> <input type="radio" class="mr-1" wire:model="all_day" value="1" /> Yes </label>
                                    <label> <input type="radio" class="mr-1" wire:model="all_day" value="0" /> No </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="timezone">Timezone:</label>
                                <select class="form-control" id="timezone" name="timezone" wire:model="timezone">
                                    @foreach (timezone_identifiers_list() as $tz)
                                    <option value="{{ $tz }}">{{ $tz }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="start_date_time">Start Date & Time:</label>
                                <input type="datetime-local" class="form-control" id="start_date_time" name="start_date_time" wire:model="start_date_time" />
                            </div>

                            <div class="form-group">
                                <label for="end_date_time">End Date & Time:</label>
                                <input type="datetime-local" class="form-control" id="end_date_time" name="end_date_time" wire:model="end_date_time" />
                            </div>

                            <div class="form-group">
                                <label for="heading_1">Head Title:</label>
                                <input type="text" class="form-control" id="heading_1" name="heading_1" wire:model="heading_1" />
                            </div>

                            <div class="form-group">
                                <label for="heading_2">Title:</label>
                                <input type="text" class="form-control" id="heading_2" name="heading_2" wire:model="heading_2" />
                            </div>

                            <div class="form-group">
                                <label for="heading_3">Sub Title:</label>
                                <input type="text" class="form-control" id="heading_3" name="heading_3" wire:model="heading_3" />
                            </div>

                            <div class="form-group">
                                <label for="calendar_link">Calendar Link:</label>
                                <input type="url" class="form-control" id="calendar_link" name="calendar_link" wire:model="calendar_link" />
                            </div>

                            <div class="form-group">
                                <label for="calendar_profile_image">Calendar Profile Image Upload:</label>
                                <input type="file" class="form-control" id="calendar_profile_image" name="calendar_profile_image" wire:model="calendar_profile_image" />
                            </div>

                            <input type="submit" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
