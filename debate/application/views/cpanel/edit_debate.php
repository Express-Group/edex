 <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/debate'); ?>">Debate</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/debate/create'); ?>">Edit</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">EDIT DEBATE</h2>
				</div>
				<div class="az-content-header-right">
					<div class="media">
						<div class="media-body">
							<label>Last Login</label>
							<h6><?php echo date('M d, Y h:i:s A' , strtotime($this->session->userdata('last_login'))); ?></h6>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<label>Date</label>
							<h6><?php echo date('M d, Y'); ?></h6>
						</div>
					</div>
					 <a href="<?php echo base_url('admin/debate'); ?>" class="btn btn-purple">Go Back</a>
					 <a href="<?php echo base_url('admin/debate/create'); ?>" class="btn btn-purple">Clear</a>
					 <button onclick="document.getElementById('create_debate').submit();" class="btn btn-purple">Update</button>
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-12 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<form method="post" action="" id="create_debate" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-xl-6">
											<div class="form-group">
												<label>TOPIC <sup>*</sup></label>
												<input name="topic" type="text" class="form-control" value="<?php if(set_value('topic')!=''){ echo set_value('topic');}else{ echo $data['topic'];} ?>">
												<?php echo form_error('topic' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>DESCRIPTION <sup>*</sup></label>
												<textarea name="description" rows="5" class="form-control"><?php if(set_value('description')!=''){ echo set_value('description');}else{ echo $data['description'];} ?></textarea>
												<?php echo form_error('description' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>SCHEDULE DATE & TIME <sup>*</sup></label>
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
														</div>
													</div>
													<input value="<?php if(set_value('schedule_date')!=''){ echo set_value('schedule_date');}else{ echo date('F d, Y H:i',strtotime($data['schedule_date']));} ?>" name="schedule_date" type="text" id="schedule_date" class="form-control">
												</div>
												<?php echo form_error('schedule_date' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>VOTING STATUS <sup>*</sup></label>
												<select name="voting_status" class="form-control">
													<option value="">Please select any one</option>
													<option  <?php if($data['voting_status']=='1'){ echo 'selected'; }?> value="1">Active</option>
													<option <?php if($data['voting_status']=='0'){ echo 'selected'; }?> value="0">Inactive</option>
												</select>
												<?php echo form_error('voting_status' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>TYPE <sup>*</sup></label>
												<select name="type" class="form-control">
													<option value="">Please select any one</option>
													<option  <?php if($data['type']=='1'){ echo 'selected'; }?> value="1">Senior</option>
													<option <?php if($data['type']=='2'){ echo 'selected'; }?> value="2">Junior</option>
												</select>
												<?php echo form_error('type' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>CATEGORY <sup>*</sup></label>
												<select name="category" class="form-control">
													<option value="">Please select any one</option>
													<option <?php if($data['category']=='Comics'){ echo 'selected'; }?> value="Comics">Comics</option>
													<option <?php if($data['category']=='Education'){ echo 'selected'; }?> value="Education">Education</option>
													
												</select>
												<?php echo form_error('category' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>PARTICIPANT LIMIT <sup>*</sup></label>
												<input value="<?php if(set_value('limit')!=''){ echo set_value('limit');}else{ echo $data['participant_limit'];} ?>" name="limit" type="number" class="form-control">
												<?php echo form_error('limit' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>PRESENTER <sup>*</sup></label>
												<input value="<?php if(set_value('presenter')!=''){ echo set_value('presenter');}else{ echo $data['presenter'];} ?>" name="presenter" type="text" class="form-control">
												<?php echo form_error('presenter' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>DEBATE IMAGE <sup>*</sup></label>
												<img style="width: 100px;display: block;margin-bottom: 3%;border-radius: 5px;" src="<?php echo ASSETURL; ?>img/debate/<?php echo $data['debate_image']; ?>">
												<input type="hidden" name="temp_image" value="<?php echo $data['debate_image']; ?>">
												<div class="custom-file">
													<input accept="image/x-jpg,image/jpeg"  name="debate_image" type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
												<?php echo form_error('debate_image' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>