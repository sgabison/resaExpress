(function(e, t) {
	e.fn
			.extend({
				FullCalendarExt : function(n) {
					var r = {
						calendarSelector : "#calendar",
						ajaxJsonFetch : "includes/cal_events.php",
						ajaxUiUpdate : "includes/cal_update.php",
						ajaxEventSave : "includes/cal_save.php",
						ajaxEventQuickSave : "includes/cal_quicksave.php",
						ajaxEventDelete : "includes/cal_delete.php",
						ajaxEventEdit : "includes/cal_edit_update.php",
						ajaxEventExport : "includes/cal_export.php",
						ajaxRepeatCheck : "includes/cal_check_rep_events.php",
						ajaxRetrieveDescription : "includes/cal_description.php",
						modalViewSelector : "#cal_viewModal",
						modalEditSelector : "#cal_editModal",
						modalQuickSaveSelector : "#cal_quickSaveModal",
						modalPromptSelector : "#cal_prompt",
						modalEditPromptSelector : "#cal_edit_prompt_save",
						formAddEventSelector : "form#add_event",
						formFilterSelector : "form#filter-category select",
						formEditEventSelector : "form#edit_event",
						formSearchSelector : "form#search",
						successAddEventMessage : "Successfully Added Event",
						successDeleteEventMessage : "Successfully Deleted Event",
						successUpdateEventMessage : "Successfully Updated Event",
						failureAddEventMessage : "Failed To Add Event",
						failureDeleteEventMessage : "Failed To Delete Event",
						failureUpdateEventMessage : "Failed To Update Event",
						generalFailureMessage : "Failed To Execute Action",
						ajaxError : "Failed to load content",
						visitUrl : "Visit Url:",
						titleText : "Title:",
						descriptionText : "Description:",
						colorText : "Color:",
						startDateText : "Start Date:",
						startTimeText : "Start Time:",
						endDateText : "End Date:",
						endTimeText : "End Time:",
						categoryText : "Category:",
						eventText : "Event: ",
						repetitiveEventActionText : "This is a repetitive event, what do you want to do?",
						isRTL : false,
						monthNames : [ "January", "February", "March", "April","May", "June", "July", "August", "September","October", "November", "December" ],
						monthNamesShort : [ "Jan", "Feb", "Mar", "Apr", "May","Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
						dayNames : [ "Sunday", "Monday", "Tuesday",	"Wednesday", "Thursday", "Friday", "Saturday" ],
						dayNamesShort : [ "Sun", "Mon", "Tue", "Wed", "Thu","Fri", "Sat" ],
						today : "today",
						month : "month",
						week : "week",
						day : "day",
						weekNumberTitle : "W",
						allDayText : "all-day",
						defaultColor : "#587ca3",
						weekType : "agendaWeek",
						dayType : "agendaDay",
						editable : true,
						disableDragging : false,
						disableResizing : false,
						ignoreTimezone : true,
						lazyFetching : true,
						filter : true,
						quickSave : true,
						firstDay : 0,
						gcal : false,
						version : "modal",
						quickSaveCategory : "",
						colorpickerArgs : {
							format : "hex"
						},
						defaultView : "month",
						aspectRatio : 1.35,
						weekends : true,
						weekNumbers : false,
						weekNumberCalculation : "iso",
						hiddenDays : [],
						theme : false,
						themePrev : "circle-triangle-w",
						themeNext : "circle-triangle-e",
						titleFormatMonth : "MMMM yyyy",
						titleFormatWeek : "MMM d[ yyyy]{ '&#8212;'[ MMM] d yyyy}",
						titleFormatDay : "dddd, MMM d, yyyy",
						columnFormatMonth : "ddd",
						columnFormatWeek : "ddd M/d",
						columnFormatDay : "dddd M/d",
						timeFormat : "H:mm - {H:mm}",
						weekMode : "fixed",
						allDaySlot : true,
						axisFormat : "h(:mm)tt",
						slotMinutes : 30,
						minTime : 0,
						maxTime : 24,
						slotEventOverlap : true,
						savedRedirect : "index.php",
						removedRedirect : "index.php",
						updatedRedirect : "index.php",
						ajaxLoaderMarkup : '<div class="loadingDiv"></div>',
						prev : "<span class='fc-text-arrow'>&lsaquo;</span>",
						next : "<span class='fc-text-arrow'>&rsaquo;</span>",
						prevYear : "<span class='fc-text-arrow'>&laquo;</span>",
						nextYear : "<span class='fc-text-arrow'>&raquo;</span>"
					};
					var n = e.extend(r, n);
					var i = n; //e =$ et i= les parametres
					
					if (i.gcal == true) {
						i.weekType = "";
						i.dayType = ""
					}
					e(i.calendarSelector)
							.fullCalendar(
									{
										defaultView : i.defaultView,
										aspectRatio : i.aspectRatio,
										weekends : i.weekends,
										weekNumbers : i.weekNumbers,
										weekNumberCalculation : i.weekNumberCalculation,
										weekNumberTitle : i.weekNumberTitle,
										titleFormat : {
											month : i.titleFormatMonth,
											week : i.titleFormatWeek,
											day : i.titleFormatDay
										},
										columnFormat : {
											month : i.columnFormatMonth,
											week : i.columnFormatWeek,
											day : i.columnFormatDay
										},
										isRTL : i.isRTL,
										hiddenDays : i.hiddenDays,
										theme : i.theme,
										buttonIcons : {
											prev : i.themePrev,
											next : i.themeNext
										},
										weekMode : i.weekMode,
										allDaySlot : i.allDaySlot,
										allDayText : i.allDayText,
										axisFormat : i.axisFormat,
										slotMinutes : i.slotMinutes,
										minTime : i.minTime,
										maxTime : i.maxTime,
										slotEventOverlap : i.slotEventOverlap,
										timeFormat : i.timeFormat,
										header : {
											left : "prev,next",
											center : "title",
											right : "month," + i.weekType + ","
													+ i.dayType
										},
										monthNames : i.monthNames,
										monthNamesShort : i.monthNamesShort,
										dayNames : i.dayNames,
										dayNamesShort : i.dayNamesShort,
										buttonText : {
											prev : i.prev,
											next : i.next,
											prevYear : i.prevYear,
											nextYear : i.nextYear,
											today : i.today,
											month : i.month,
											week : i.week,
											day : i.day
										},
										editable : i.editable,
										disableDragging : i.disableDragging,
										disableResizing : i.disableResizing,
										ignoreTimezone : i.ignoreTimezone,
										firstDay : i.firstDay,
										lazyFetching : i.lazyFetching,
										selectable : i.quickSave,
										selectHelper : i.quickSave,
										select : function(t, n, r) {
											if (i.version == "modal") {
												calendar.quickModal(t, n, r);
												e(i.calendarSelector)
														.fullCalendar(
																"unselect")
											}
										},
										eventSources : [ {
											url : i.ajaxJsonFetch,
											allDayDefault : false
										} ],
										eventDrop : function(t) {
											var n = e.fullCalendar.formatDate(
													t.start, "yyyy-MM-dd");
											var r = e.fullCalendar.formatDate(
													t.start, "HH:mm");
											var s = e.fullCalendar.formatDate(
													t.end, "yyyy-MM-dd");
											var o = e.fullCalendar.formatDate(
													t.end, "HH:mm");
											t.start = n + " " + r;
											if (t.end === null
													|| t.end === "null") {
												t.end = n + " " + r
											} else {
												t.end = s + " " + o
											}
											e
													.post(
															i.ajaxUiUpdate,
															t,
															function(t) {
																e(
																		i.calendarSelector)
																		.fullCalendar(
																				"refetchEvents")
															})
										},
										eventResize : function(t) {
											var n = e.fullCalendar.formatDate(
													t.start, "yyyy-MM-dd");
											var r = e.fullCalendar.formatDate(
													t.start, "HH:mm");
											var s = e.fullCalendar.formatDate(
													t.end, "yyyy-MM-dd");
											var o = e.fullCalendar.formatDate(
													t.end, "HH:mm");
											t.start = n + " " + r;
											if (t.end === null
													|| t.end === "null") {
												t.end = n + " " + r
											} else {
												t.end = s + " " + o
											}
											e
													.post(
															i.ajaxUiUpdate,
															t,
															function(t) {
																e(
																		i.calendarSelector)
																		.fullCalendar(
																				"refetchEvents")
															})
										},
										eventRender : function(t, n) {
											var r = t.color;
											var s = e.fullCalendar.formatDate(
													t.start, "yyyy-MM-dd");
											var o = e.fullCalendar.formatDate(
													t.start, "HH:mm");
											var u = e.fullCalendar.formatDate(
													t.end, "yyyy-MM-dd");
											var a = e.fullCalendar.formatDate(
													t.end, "HH:mm");
											if (i.version == "modal") {
												n.attr("data-toggle", "modal");
												n.attr('href',
														'javascript:void(0);');
												n.attr("onclick",
														'calendar.openModal("'
																+ t.title
																+ '","' + t.url
																+ '","'
																+ t.original_id
																+ '","' + t.id
																+ '","'
																+ t.start
																+ '","' + t.end
																+ '","' + r
																+ '","' + s
																+ '","' + o
																+ '","' + u
																+ '","' + a
																+ '");')
											}
										}
									});
					calendar.openModal = function(n, r, s, o, u, a, f, l, c, h,
							p) {
						e(".modal-body").html(i.ajaxLoaderMarkup);
						calendar.title = n;
						calendar.url = r;
						calendar.id = s;
						calendar.rep_id = o;
						calendar.eventStart = u;
						calendar.eventEnd = a;
						calendar.color = f;
						calendar.startDate = l;
						calendar.startTime = c;
						calendar.endDate = h;
						calendar.endTime = p;
						var d = "id=" + calendar.id;
						e.ajax({
							type : "POST",
							url : i.ajaxRetrieveDescription,
							data : d,
							cache : false,
							beforeSend : function() {
								e(".loadingDiv").show();
								e(".modal-footer").hide()
							},
							error : function() {
								e(".loadingDiv").hide();
								alert(i.ajaxError)
							},
							success : function(n) {
								e(".loadingDiv").hide();
								e(".modal-footer").show();
								if (calendar.url === "undefined"
										|| calendar.url === t) {
									e(".modal-body").html(
											i.ajaxLoaderMarkup + n)
								} else {
									e(".modal-body").html(
											i.ajaxLoaderMarkup + n
													+ "<br /><br />"
													+ i.visitUrl + ' <a href="'
													+ calendar.url + '">'
													+ calendar.url + "</a>")
								}
								e(".modal-footer").delegate(
										'[data-option="remove"]', "click",
										function(e) {
											calendar.remove(calendar.id);
											e.preventDefault()
										});
								e(".modal-footer").delegate(
										'[data-option="export"]',
										"click",
										function(e) {
											calendar.exportIcal(calendar.id,
													calendar.title,
													calendar.description,
													calendar.eventStart,
													calendar.eventEnd,
													calendar.url);
											e.preventDefault()
										})
							}
						});
						e(".modal-header")
								.html(
										'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'
												+ "<h4>"
												+ calendar.title
												+ "</h4>");
						e(i.modalViewSelector).modal("show");
						e(".modal-footer")
								.delegate(
										'[data-option="edit"]',
										"click",
										function(t) {
											e(i.modalViewSelector)
													.modal("hide");
											e(".modal-body").html(
													i.ajaxLoaderMarkup);
											var n = "id=" + calendar.id
													+ "&mode=edit";
											e
													.ajax({
														type : "POST",
														url : i.ajaxRetrieveDescription,
														data : n,
														cache : false,
														beforeSend : function() {
															e(".loadingDiv")
																	.show();
															e(".modal-footer")
																	.hide()
														},
														error : function() {
															e(".loadingDiv")
																	.hide();
															alert(i.ajaxError)
														},
														success : function(t) {
															e(".loadingDiv")
																	.hide();
															e(".modal-footer")
																	.show();
															if (calendar.url === "undefined") {
																e(
																		".modal-header")
																		.html(
																				'<form id="event_title_e">'
																						+ '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'
																						+ "<label>"
																						+ i.titleText
																						+ " </label>"
																						+ '<input type="text" class="input-block-level" name="title_update" value="'
																						+ calendar.title
																						+ '">'
																						+ "</form>");
																e(".modal-body")
																		.html(
																				'<form id="event_description_e">'
																						+ "<label>"
																						+ i.descriptionText
																						+ " </label>"
																						+ '<textarea class="input-block-level" name="description_update">'
																						+ t
																						+ "</textarea>"
																						+ "<label>"
																						+ i.colorText
																						+ " </label>"
																						+ '<input type="text" class="input-block-level" id="color_update_picker" name="color_update" value="'
																						+ f
																						+ '">'
																						+ '<div class="pull-left" style="margin-right: 10px;">'
																						+ "<label>"
																						+ i.startDateText
																						+ " </label>"
																						+ '<input type="text" id="date_datepicker" name="update_start_date" value="'
																						+ l
																						+ '">'
																						+ "</div>"
																						+ '<div class="pull-left">'
																						+ "<label>"
																						+ i.startTimeText
																						+ "</label>"
																						+ '<input type="text" class="input-small" name="update_start_time" id="time_update_picker" placeholder="HH:MM:SS" value="'
																						+ c
																						+ '">'
																						+ "</div>"
																						+ '<div class="clearfix"></div>'
																						+ '<div class="pull-left" style="margin-right: 10px;">'
																						+ "<label>"
																						+ i.endDateText
																						+ " </label>"
																						+ '<input type="text" id="date_datepicker_second" name="update_end_date" value="'
																						+ h
																						+ '">'
																						+ "</div>"
																						+ '<div class="pull-left">'
																						+ "<label>"
																						+ i.endTimeText
																						+ "</label>"
																						+ '<input type="text" class="input-small" name="update_end_time" id="time_update_picker_second" placeholder="HH:MM:SS" value="'
																						+ p
																						+ '">'
																						+ "</div>"
																						+ "</form>")
															} else {
																e(
																		".modal-header")
																		.html(
																				'<form id="event_title_e">'
																						+ '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'
																						+ "<label>"
																						+ i.titleText
																						+ " </label>"
																						+ '<input type="text" class="input-block-level" name="title_update" value="'
																						+ calendar.title
																						+ '">'
																						+ "</form>");
																e(".modal-body")
																		.html(
																				'<form id="event_description_e">'
																						+ "<label>"
																						+ i.descriptionText
																						+ " </label>"
																						+ '<textarea class="input-block-level" name="description_update">'
																						+ t
																						+ "</textarea>"
																						+ "<label>"
																						+ i.colorText
																						+ " </label>"
																						+ '<input type="text" class="input-block-level" id="color_update_picker" name="color_update" value="'
																						+ f
																						+ '">'
																						+ '<div class="pull-left" style="margin-right: 10px;">'
																						+ "<label>"
																						+ i.startDateText
																						+ " </label>"
																						+ '<input type="text" id="date_datepicker" name="update_start_date" value="'
																						+ l
																						+ '">'
																						+ "</div>"
																						+ '<div class="pull-left">'
																						+ "<label>"
																						+ i.startTimeText
																						+ "</label>"
																						+ '<input type="text" class="input-small" name="update_start_time" id="time_update_picker" placeholder="HH:MM" value="'
																						+ c
																						+ '">'
																						+ "</div>"
																						+ '<div class="clearfix"></div>'
																						+ '<div class="pull-left" style="margin-right: 10px;">'
																						+ "<label>"
																						+ i.endDateText
																						+ " </label>"
																						+ '<input type="text" id="date_datepicker_second" name="update_end_date" value="'
																						+ h
																						+ '">'
																						+ "</div>"
																						+ '<div class="pull-left">'
																						+ "<label>"
																						+ i.endTimeText
																						+ "</label>"
																						+ '<input type="text" class="input-small" name="update_end_time" id="time_update_picker_second" placeholder="HH:MM" value="'
																						+ p
																						+ '">'
																						+ "</div>"
																						+ '<div class="clearfix"></div>'
																						+ "<label>URL: </label>"
																						+ '<input type="text" class="input-block-level" name="url_update" value="'
																						+ calendar.url
																						+ '">'
																						+ "</form>")
															}
															e(
																	"input#color_update_picker")
																	.colorpicker(
																			i.colorpickerArgs);
															e(
																	"input#date_datepicker")
																	.datepicker(
																			{
																				dateFormat : "yy-mm-dd",
																				minDate : new Date,
																				onSelect : function(
																						t,
																						n) {
																					e(
																							"input#date_datepicker")
																							.val(
																									t)
																				}
																			});
															e(
																	"input#date_datepicker_second")
																	.datepicker(
																			{
																				dateFormat : "yy-mm-dd",
																				minDate : new Date,
																				onSelect : function(
																						t,
																						n) {
																					e(
																							"input#date_datepicker_second")
																							.val(
																									t)
																				}
																			});
															e(document)
																	.on(
																			"click",
																			"a.ui-datepicker-next",
																			function() {
																				e(
																						"input#date_datepicker")
																						.datepicker(
																								"setDate",
																								"c+1w");
																				e(
																						"input#date_datepicker_second")
																						.datepicker(
																								"setDate",
																								"c+1w")
																			});
															e(document)
																	.on(
																			"click",
																			"a.ui-datepicker-prev",
																			function() {
																				e(
																						"input#date_datepicker")
																						.datepicker(
																								"setDate",
																								"c-1w");
																				e(
																						"input#date_datepicker_second")
																						.datepicker(
																								"setDate",
																								"c-1w")
																			});
															e(
																	"input#time_update_picker")
																	.timepicker();
															e(
																	"input#time_update_picker_second")
																	.timepicker()
														}
													});
											e(i.modalEditSelector)
													.modal("show");
											e(i.modalEditSelector).on(
													"hidden",
													function() {
														e(".modal-body").html(
																"")
													});
											e(".modal-footer").delegate(
													'[data-dismiss="modal"]',
													"click",
													function(t) {
														e(".modal-body").html(
																"");
														t.preventDefault()
													});
											e(".modal-footer")
													.off("click")
													.delegate(
															'[data-option="save"]',
															"click",
															function(t) {
																var n = e(
																		"form#event_title_e")
																		.serializeArray();
																var r = e(
																		"form#event_description_e")
																		.serializeArray();
																var i = e(
																		"form#event_description_e")
																		.serializeArray();
																calendar
																		.update(
																				calendar.id,
																				n[1],
																				r,
																				i);
																t
																		.preventDefault()
															});
											t.preventDefault()
										})
					};
					calendar.quickModal = function(t, n, r) {
						e(".modal-header")
								.html(
										'<form id="event_title">'
												+ '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'
												+ "<label>"
												+ i.titleText
												+ " </label>"
												+ '<input type="text" class="input-block-level" name="title" value="">'
												+ "</form>");
						e(".modal-body")
								.html(
										'<form id="event_description">'
												+ "<label>"
												+ i.descriptionText
												+ " </label>"
												+ '<textarea class="input-block-level" name="description"></textarea>'
												+ i.quickSaveCategory
												+ "</form>");
						e(i.modalQuickSaveSelector).modal("show");
						calendar.start = t;
						calendar.end = n;
						calendar.allDay = r;
						e(".modal-footer").off("click").delegate(
								'[data-option="quickSave"]',
								"click",
								function(t) {
									var n = e("form#event_title")
											.serializeArray();
									var r = e("form#event_description")
											.serializeArray();
									if (i.quickSaveCategory !== "") {
										calendar.category = r[5].value
									} else {
										calendar.category = ""
									}
									calendar.quickSave(n[2], r[2],
											calendar.start, calendar.end,
											calendar.allDay);
									t.preventDefault()
								})
					};
					calendar.quickSave = function(t, n, r, s, o) {
						var u = e.fullCalendar.formatDate(r, "yyyy-MM-dd");
						var a = e.fullCalendar.formatDate(r, "HH:mm");
						var f = e.fullCalendar.formatDate(s, "yyyy-MM-dd");
						var l = e.fullCalendar.formatDate(s, "HH:mm");
						if (i.quickSaveCategory !== "") {
							var c = "title=" + t.value + "&description="
									+ n.value + "&start_date=" + u
									+ "&start_time=" + a + "&end_date=" + f
									+ "&end_time=" + l + "&url=false&color="
									+ i.defaultColor + "&allDay=" + o
									+ "&categorie=" + calendar.category
						} else {
							var c = "title=" + t.value + "&description="
									+ n.value + "&start_date=" + u
									+ "&start_time=" + a + "&end_date=" + f
									+ "&end_time=" + l + "&url=false&color="
									+ i.defaultColor + "&allDay=" + o
						}
						e.post(i.ajaxEventQuickSave, c, function(t) {
							if (t == 1) {
								e(i.modalQuickSaveSelector).modal("hide");
								e(i.calendarSelector).fullCalendar(
										"refetchEvents")
							} else {
								alert(i.failureAddEventMessage)
							}
						})
					};
					calendar.save = function() {
						e(i.formAddEventSelector)
								.on(
										"submit",
										function(t) {
											e
													.post(
															i.ajaxEventSave,
															e(this).serialize(),
															function(e) {
																if (e == 1) {
																	alert(i.successAddEventMessage);
																	document.location
																			.reload()
																} else {
																	alert(i.failureAddEventMessage);
																	document.location
																			.reload()
																}
															});
											t.preventDefault()
										})
					};
					calendar.remove = function(t) {
						var n = "id=" + t;
						e
								.ajax({
									type : "POST",
									url : i.ajaxRepeatCheck,
									data : n,
									cache : false,
									success : function(r) {
										if (r == "REP_FOUND") {
											e(i.modalViewSelector)
													.modal("hide");
											if (i.version == "modal") {
												e(
														i.modalPromptSelector
																+ " .modal-header")
														.html(
																"<h4>"
																		+ i.eventText
																		+ calendar.title
																		+ "</h4>");
												e(
														i.modalPromptSelector
																+ " .modal-body")
														.html(
																i.repetitiveEventActionText)
											} else {
												e(
														i.modalPromptSelector
																+ " .modal-header")
														.html(
																"<h4>"
																		+ i.eventText
																		+ "</h4>");
												e(
														i.modalPromptSelector
																+ " .modal-body")
														.html(
																i.repetitiveEventActionText)
											}
											e(i.modalPromptSelector).modal(
													"show");
											e(".modal-footer")
													.delegate(
															'[data-option="remove-this"]',
															"click",
															function(t) {
																calendar
																		.remove_this(n);
																e(
																		i.modalPromptSelector)
																		.modal(
																				"hide");
																t
																		.preventDefault()
															});
											e(".modal-footer")
													.delegate(
															'[data-option="remove-repetitives"]',
															"click",
															function(n) {
																if (i.version == "modal") {
																	var r = "id="
																			+ t
																			+ "&rep_id="
																			+ calendar.rep_id
																			+ "&method=repetitive_event"
																} else {
																	var r = "id="
																			+ t
																			+ "&rep_id="
																			+ e(
																					"input#rep_id")
																					.val()
																			+ "&method=repetitive_event"
																}
																calendar
																		.remove_this(r);
																e(
																		i.modalPromptSelector)
																		.modal(
																				"hide");
																n
																		.preventDefault()
															})
										} else {
											calendar.remove_this(n)
										}
									},
									error : function(e) {
										alert(i.generalFailureMessage)
									}
								})
					};
					calendar.remove_this = function(t) {
						e.post(i.ajaxEventDelete, t, function(t) {
							if (t == "") {
								if (i.version == "modal") {
									e(i.modalViewSelector).modal("hide");
									e(i.calendarSelector).fullCalendar(
											"refetchEvents")
								} else {
									document.location.reload()
								}
							} else {
								alert(i.failureDeleteEventMessage)
							}
						})
					};
					calendar.update = function(t, n, r, s) {
						var o = "id=" + t;
						if (i.version == "php") {
							var n = e("input#title_update").val();
							var r = {
								6 : e("textarea#description_update").val(),
								7 : i.defaultColor,
								8 : e("input#datepicker").val(),
								9 : e("input#tp1").val(),
								10 : e("input#datepicker2").val(),
								11 : e("input#tp2").val()
							};
							calendar.url = "undefined"
						}
						e
								.ajax({
									type : "POST",
									url : i.ajaxRepeatCheck,
									data : o,
									cache : false,
									success : function(o) {
										if (o == "REP_FOUND") {
											e(i.modalEditSelector)
													.modal("hide");
											if (i.version == "modal") {
												e(
														i.modalEditPromptSelector
																+ " .modal-header")
														.html(
																"<h4>"
																		+ i.eventText
																		+ calendar.title
																		+ "</h4>");
												e(
														i.modalEditPromptSelector
																+ " .modal-body-custom")
														.css("padding", "15px")
														.html(
																i.repetitiveEventActionText)
											} else {
												e(
														i.modalEditPromptSelector
																+ " .modal-header")
														.html(
																"<h4>"
																		+ i.eventText
																		+ "</h4>");
												e(
														i.modalEditPromptSelector
																+ " .modal-body-custom")
														.css("padding", "15px")
														.html(
																i.repetitiveEventActionText)
											}
											e(i.modalEditPromptSelector).modal(
													"show");
											e(".modal-footer")
													.delegate(
															'[data-option="save-this"]',
															"click",
															function(o) {
																calendar
																		.update_this(
																				t,
																				n,
																				r,
																				s);
																e(
																		i.modalEditPromptSelector)
																		.modal(
																				"hide");
																e(
																		i.modalEditSelector)
																		.modal(
																				"hide");
																o
																		.preventDefault()
															});
											e(".modal-footer")
													.delegate(
															'[data-option="save-repetitives"]',
															"click",
															function(o) {
																if (i.version == "modal") {
																	var u = "&rep_id="
																			+ calendar.rep_id
																			+ "&method=repetitive_event"
																} else {
																	var u = "&rep_id="
																			+ e(
																					"input#rep_id")
																					.val()
																			+ "&method=repetitive_event"
																}
																calendar
																		.update_this(
																				t,
																				n,
																				r,
																				s,
																				u);
																e(
																		i.modalEditPromptSelector)
																		.modal(
																				"hide");
																e(
																		i.modalEditSelector)
																		.modal(
																				"hide");
																o
																		.preventDefault()
															})
										} else {
											calendar.update_this(t, n, r, s)
										}
									},
									error : function(e) {
										alert(i.generalFailureMessage)
									}
								})
					};
					calendar.update_this = function(n, r, s, o, u) {
						if (i.version == "modal") {
							if (calendar.url === "undefined"
									|| calendar.url === t) {
								var a = "id=" + n + "&title=" + r.value
										+ "&description=" + s[6].value
										+ "&color=" + s[7].value
										+ "&start_date=" + s[8].value
										+ "&start_time=" + s[9].value
										+ "&end_date=" + s[10].value
										+ "&end_time=" + s[11].value
							} else {
								var a = "id=" + n + "&title=" + r.value
										+ "&description=" + s[7].value
										+ "&color=" + s[8].value
										+ "&start_date=" + s[9].value
										+ "&start_time=" + s[10].value
										+ "&end_date=" + s[11].value
										+ "&end_time=" + s[12].value + "&url="
										+ s[13].value
							}
						} else {
							var a = "id=" + n + "&title=" + r + "&description="
									+ s[6] + "&color=" + s[7] + "&start_date="
									+ s[8] + "&start_time=" + s[9]
									+ "&end_date=" + s[10] + "&end_time="
									+ s[11]
						}
						if (u === t) {
							var f = a
						} else {
							var f = a + u
						}
						e.ajax({
							type : "POST",
							url : i.ajaxEventEdit,
							data : f,
							cache : false,
							success : function(t) {
								if (t == "") {
									if (i.version == "modal") {
										e(i.modalEditSelector).modal("hide");
										e(i.calendarSelector).fullCalendar(
												"refetchEvents")
									} else {
										document.location.reload()
									}
								} else {
									alert(i.failureUpdateEventMessage)
								}
							},
							error : function(e) {
								alert(i.failureUpdateEventMessage)
							}
						})
					};
					calendar.exportIcal = function(t, n, r, s, o, u) {
						var a = e.fullCalendar.formatDate(e.fullCalendar
								.parseDate(s), "yyyy-MM-dd HH:mm:ss");
						var f = e.fullCalendar.formatDate(e.fullCalendar
								.parseDate(o), "yyyy-MM-dd HH:mm:ss");
						var l = "method=export&id=" + t + "&title=" + n
								+ "&description=" + r + "&start_date=" + a
								+ "&end_date=" + f + "&url=" + u;
						e.post(i.ajaxEventExport, l, function(n) {
							e(i.modalViewSelector).modal("hide");
							window.location = "includes/Event-" + t + ".ics";
							var r = "id=" + t;
							e.post(i.ajaxEventExport, r, function() {
							})
						})
					};
					if (i.filter == true) {
						e(i.formFilterSelector)
								.on(
										"change",
										function(t) {
											selected_value = e(this).val();
											construct = "filter="
													+ selected_value;
											e
													.post(
															"includes/loader.php",
															construct,
															function(t) {
																e(
																		i.calendarSelector)
																		.fullCalendar(
																				"refetchEvents")
															});
											t.preventDefault()
										});
						e(i.formSearchSelector).keypress(function(e) {
							if (e.which == 13) {
								s();
								e.preventDefault()
							}
						});
						e(i.formSearchSelector + " button").on("click",
								function(e) {
									s()
								});
						function s() {
							value = e(i.formSearchSelector + " input").val();
							construct = "search=" + value;
							e.post("includes/loader.php", construct,
									function(t) {
										e(i.calendarSelector).fullCalendar(
												"refetchEvents")
									})
						}
					}
				}
			})
})(jQuery);
var calendar = {}