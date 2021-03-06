<!-- content starts -->
	<a class="btn btn-large" href="<?php echo site_url($this->config->item('controlPanel') . '/store/storeUserSignup') ?>"><i class="icon-plus"></i> Add Store User</a>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header well" data-original-title>
				<h2><i class="icon-list-alt"></i> <?php echo $page_title; ?></h2>
		</div>
		<div class="box-content">
                        <div><?php echo $this->session->flashdata('Msg'); ?></div>
			<?php  if(count($bannersList) > 0){ ?>
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Position</th>
								  <th>Image</th>
								  <th>URL</th>
								  <th>Status</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php foreach ($bannersList as  $bannerId=> $banner) { ?>
							<tr>
								<td><?php echo $banner->position; ?></td>
								<td><?php echo $banner->image; ?></td>
								<td><?php echo $banner->url; ?></td>
                                                    
								
								<td class="center">
									<a href="javascript:void(0)" onClick="xajax_toggle_status('<?php echo $user->id; ?>','<?php echo $user->status; ?>');"><span class="label <?php if($user->status=='Active'){?>label-success<?php } ?>"><?php echo $user->status?></span></a>
								</td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo site_url($this->config->item('controlPanel') . '/store/bannerEdit/'.$banner->id);?>">
										<i class="icon-edit icon-white"></i> Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo site_url($this->config->item('controlPanel') . '/store/bannerDelete/'.$banner->id);?>">
										<i class="icon-trash icon-white"></i> Delete
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>  
				<?php }else{ ?>
				<div class="alert alert-error">
					<h4 class="alert-heading">Oops!!!</h4>
					No record found.
				</div>
			  <?php } ?>            
			</div>					
		</div><!--/span-->
	</div><!--/row-->	
<!-- content ends -->