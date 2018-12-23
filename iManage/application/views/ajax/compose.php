								<div class="panel-body mailbox-content">
                                    <div class="compose-body">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="to" class="col-sm-2 control-label">To</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="to">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subject" class="col-sm-2 control-label">Subject</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="subject">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="compose-message">
                                        <div class="summernote"></div>
                                    </div>
                                    <div class="compose-options">
                                        <div class="pull-right">
                                            <a href="inbox.html" class="btn btn-success"><i class="fa fa-send m-r-xs"></i>Send</a>
                                        </div>
                                    </div>
                                </div>
                                <script>
									$("#subject").summernote({
										height : 300
									});
                                </script>