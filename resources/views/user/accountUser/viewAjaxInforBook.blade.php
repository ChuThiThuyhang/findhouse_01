var book = data['book'];
                var tours = data['tour'];
                var arrays = data['array'];
                var html = '<div class="modal-dialog" role="document">';
                    html += '<div class="modal-content">';
                        html += '<div class="modal-header">';
                            html += '<div class="row" style="border-bottom: 1px solid #ccc">';
                                html += '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="height: auto;">';
                                    html += '<div>';
                                        html += '<span class="ng-binding">&nbsp;&nbsp;-  Tour:</span>';
                                        html += '<span class="text-info-ticket ng-binding" style="font-weight: 700">'+ $tours->name +'</span>';
                                    html += '</div>';
                                    html += '<div>';
                                        html += '<span class="ng-binding">&nbsp;&nbsp;-  Ngày bắt đầu:</span>';
                                        html += '<span class="text-info-ticket ng-binding" style="font-weight: 700">'+ $tours->start_at +'</span>';
                                    html += '</div>';
                                    html += '<div>';
                                        html += '<span class="ng-binding">&nbsp;&nbsp;-  Số ngày:</span>';
                                        html += '<span class="text-info-ticket ng-binding" style="font-weight: 700">'+ $tours->stay_date_number +'</span>';
                                    html += '</div>';
                                    html += '<div>';
                                        html += '<span class="ng-binding">&nbsp;&nbsp;-  Phương tiện:</span>';
                                        html += '<span class="text-info-ticket ng-binding" style="font-weight: 700">'+ $tours->transport +'</span>';
                                    html += '</div>';
                                html += '</div>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
// 
return json controller
return response()->json([
                'array' => $array,
                'tour' => $tour,
                'book' => $book
            ]);