<div id="content">
	<div class="title-block">
		<h1 class="title">Proctored Exams - <?php echo ucwords($sub_page); ?>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-sm">Add New</a></h1>
		<p class="title-description">Listing all active exams</p>
		<div class="name-filter">
			<form class="form-inline" method="POST">
				<div class="input-group">
					<input type="text" name="name" class="form-control" placeholder="Search by name...">
					<span class="input-group-btn">
						<button class="btn btn-secondary">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
	<section class="section">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-block">
						<section class="data">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Status</th>
											<th>Site</th>
											<th>Student Name</th>
											<th>Exam Name</th>
											<th>School</th>
											<th>Date Received</th>
											<th>Date Due</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($exams as $exam) { ?>
										<tr>
											<td><?php echo ucwords($exam->status); ?></td>
											<td><?php echo ucwords($exam->site); ?></td>
											<td><?php echo ucwords($exam->first_name) . ' ' . ucwords($exam->last_name); ?></td>
											<td><?php echo ucwords($exam->exam_name); ?></td>
											<td><?php echo ucwords($exam->institution); ?></td>
											<td><?php echo ucwords($exam->date_received); ?></td>
											<td><?php echo ucwords($exam->date_due); ?></td>
										</tr>
									<?php }  ?>
									</tbody>
								</table>
								<?php echo ($exams) ? '' : 'No active exams'; ?>
							</div>
							<?php echo $pagination; ?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>