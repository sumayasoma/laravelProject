@extends('layout.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h2 style="text-align:center;color:#4175CB;" >Employee Promotion Report<h2></div>

				<div class="panel-body">
					<table class="table">
							<tr><th>E_ID</th><th>E_Name</th><th>Dept_Name</th><th>Designation</th><th>Work_d_P_Yr</th><th>Attn_P_Yr</th><th>Leave_P_Yr</th><th>Attn_Rating</th><th>Task_No</th><th>Task_Complt</th><th>Loan_Status</th><th>Sup_Aprsl</th><th>Edu_Expr</th><th>Remarks</th></tr>

							<?php
								foreach($empls as $empl){
									
									$token=csrf_token();
									echo "<tr><td>$empl->id</td><td>$empl->name</td><td>$empl->dept_name</td>
<td>$empl->job_title</td><td>275</td><td>275</td><td>275</td><td>275</td></tr>";
									
								}
							?>
						</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
