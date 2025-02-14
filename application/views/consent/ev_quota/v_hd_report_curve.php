<?php
/*
* v_hd_report_cureve.php
* Display v_hd_report_cureve
* @input    
* @output
* @author   Piyasak Srijan
* @Create Date 2563-04-06
*/  
?>
<style>
	.text {
		color : black;
	}
	.orange {
		background-color : orange;
		color : black;
		text-align : center;
	}
	.orange2 {
		background-color : #ffe4b3;
	}
	table {
		color : black;
	}
	th {
		text-align : center;
	}
	table, th, td {
  border: 2px solid #ffffff;
  border-collapse: collapse;
  text-align : center ;
  color : black;
 font-size: 20px;
}

tbody:hover {
  background-color: #ffffff;
}

</style>
<script>

$(document).ready(function(){
	check_quota_plan()
	check_quota_actual()
});

function check_quota_plan(){
	
	var check = "";
	var value_quotaPlan = 0;
	var quota = 0;
	//console.log(quota);
	check = document.getElementById("quotaPlanToT").innerHTML;
	//console.log(check);
	for(i=1; i<=5; i++){
		quota = document.getElementById("quota"+i).innerHTML;
			value_quotaPlan = parseInt(check) * parseInt(quota)/100;
		document.getElementById("show_quotaPlan"+i).innerHTML = value_quotaPlan;
		console.log(value_quotaPlan);
	}//for 
}
function check_quota_actual(){
	var check = "";
	var value_quotaActual = 0;
	var actual = 0;
	var Sactual = 0;
	//console.log(quota);
	check = document.getElementById("quotaActualToT").innerHTML;
	
	//	console.log(check);
	//console.log(check);
	for(i=1; i<=5; i++){
		actual = document.getElementById("quotActua"+i);
		
		value_quotaPlan = parseInt(check) * 100 / parseInt(actual);
			
			
		
		
			
		//document.getElementById("show_quotActual"+i).innerHTML = value_quotaPlan;
		//console.log(value_quotaPlan);
	}//for 
	
}

</script>
<div class="col-md-12">
	<div class="panel panel-midnightblue" data-widget='{"draggable": "false"}'>
		<div class="panel-heading">
			<h2><font size = "5px"><b>Report Curve</b></font></h2>
			<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'>
			</div>
		</div>
		<div class="panel-body">
			<div class = "row">
				<div class="form-group">
					<div class="col-md-3">
					</div>
					<div class="col-md-2">
						<select class="form-control text" id="" >
							<option value="yearEndBonus">Quota</option>
							<option value="yearEndBonus">Year End Bonus</option>
							<option value="salaryIncrement">Salary Increment</option>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control text" id="" >
							<option value="yearEndBonus">Quota of position</option>
							<option value="yearEndBonus">Team Associate above</option>
							<option value="salaryIncrement">Operational Associate</option>
						</select>
					</div>
					<div class="col-md-2">
						<select class="form-control text" id="" >
							<option value="yearEndBonus">Select Position</option>
							<option value="yearEndBonus">All Position</option>
							<option value="salaryIncrement">AGM</option>
							<option value="salaryIncrement">Senior Staff</option>
							<option value="salaryIncrement">Staff</option>
						</select>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<button class="btn-success btn">SUBMIT</button>
					</div>
				</div>
			</div>
			<br>
			<legend></legend>
			<div class = "row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="panel panel-orange" data-widget='{"draggable": "false"}' >
						<div class="panel-heading">
							<h2><font size = "5px"><b>ตางราง Report</b></font></h2>
							<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body, .panel-footer"}'>
							</div>
						</div>
						<div class="panel-body" style="">
							<table style="width:100%" class="table table-hover m-n orange">
								<thead>
								<div class="col-md-1">
									<tr class = "orange">
										<th>Grade</th>
										<th>S</th>
										<th>A</th>
										<th>B</th>
										<th>C</th>
										<th>D</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
								<div class="col-md-1">
									<tr class="orange2">
										<td><b>Quota</b></td>
										<td id = "quota1" value="5">5</td>
										<td id = "quota2" value="25">25</td>
										<td id = "quota3" value="40">40</td>
										<td id = "quota4" value="25">25</td>
										<td id = "quota5" value="5">5</td>
								<td>100</td>											
									</tr>
									<div class="col-md-1">
									<tr class="orange2" >
										<td><b>Plan</b></td>
								<td id ="show_quotaPlan1"></td>
								<td id ="show_quotaPlan2"></td>
								<td id ="show_quotaPlan3"></td>
								<td id ="show_quotaPlan4"></td>
								<td id ="show_quotaPlan5"></td>
								<td id="quotaPlanToT">8</td>	
									</div>								
									</tr>
									<div class="col-md-1">
									<tr class="orange2">
										<td><b>Actual</b></td>
										<td>
											<input type="text" class="form-control" id="quotActual1" onchang ="check_quota_actual()">
										</td>
										<td>
											<input type="text" class="form-control" id="quotaActual2" onchang ="check_quota_actual()">
										</td>
										<td>
											<input type="text" class="form-control" id="quotaActual3" onchang ="check_quota_actual()">
										</td>
										<td>
											<input type="text" class="form-control" id="quotaActual4" onchang ="check_quota_actual()">
										</td>
										<td>
											<input type="text" class="form-control" id="quotaActual5" onchang ="check_quota_actual()">
										</td>
										<td id = "quotaActualToT">8</td>						
									</tr>
									</div>
									<div class="col-md-1">
									<tr class="orange2">
										<td><b>Quota Actual</b></td>
										<td id = "show_quotActual1"></td>
										<td id = "show_quotActual2"></td>
										<td id = "show_quotActual3"></td>
										<td id = "show_quotActual4"></td>
										<td id = "show_quotActual5"></td>
										<td></td>						
									</tr>
									</div>
									<tr class="orange2">
									<div class="col-md-1">
										<td><b>Total in level</b></td>
										<td colspan = "6"></td>
									</tr>
									</div>
								</tbody>
							</table>
							<br>
							<br>
							<div id="line-example" style="position: relative;">
								<div class = "bar-example" style="position: relative;">
									<svg xmlns="http://www.w3.org/2000/svg" style="top: -0.13px; overflow: hidden; position: relative;" width="700" height="350" version="1.1">
									<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc>
									<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="32.51" y="308" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">0</tspan>
									</text>
									<path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" stroke-width="1" d="M 45.01 308.2 H 650"></path>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="32.51" y="248" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">25</tspan>
									</text>
									<path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" stroke-width="1" d="M 45.01 248 H 650"></path>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="32.51" y="188" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">50</tspan>
									</text>
									<path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" stroke-width="1" d="M 45.01 188 H 650"></path>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="32.51" y="128" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">75</tspan>
									</text>
									<path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" stroke-width="1" d="M 45.01 128 H 650"></path>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="32.51" y="68" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">100</tspan>
									</text>
									<path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" stroke-width="1" d="M 45.01 68 H 650"></path>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.9)" x="580" y="320.7" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">D</tspan>
									</text>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.9)" x="460" y="320.7" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">C</tspan>
									</text>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.9)" x="340" y="320.7" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">B</tspan>
									</text>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.9)" x="220" y="320.7" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">A</tspan>
									</text>
									<text font-family="sans-serif" font-size="12px" font-weight="normal" style="font: 12px sans-serif; font-size-adjust: none; font-stretch: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.9)" x="100" y="320.7" font="10px &quot;Arial&quot;">
										<tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.17">S</tspan>
									</text>
									<rect xmlns="http://www.w3.org/2000/svg" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#000" stroke-width="0" x="90" y="298" width="18.3209" height="11" rx="0" ry="0" r="0"></rect>
									<rect xmlns="http://www.w3.org/2000/svg" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#000" stroke-width="0" x="210" y="187" width="18.3209" height="122" rx="0" ry="0" r="0" />
									<rect xmlns="http://www.w3.org/2000/svg" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#000" stroke-width="0" x="330" y="99" width="18.3209" height="210" rx="0" ry="0" r="0"></rect>
									<rect xmlns="http://www.w3.org/2000/svg" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#000" stroke-width="0" x="450" y="187" width="18.3209" height="122" rx="0" ry="0" r="0"></rect>
									<rect xmlns="http://www.w3.org/2000/svg" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#000" stroke-width="0" x="570" y="298" width="18.3209" height="11" rx="0" ry="0" r="0"></rect>
									<path style="-webkit-tap-highlight-color: rgba(0,188,212);" fill="none" stroke="#e51c23" stroke-width="3" d="M 100 300 C 100 300 200 200 350 100 C 450 190 350 110 580 300 C">
									</path>
									<div class="legend">
										<div style="top: 13px; width: 56px; height: 58px; right: 13px; position: absolute; opacity: 0.85; background-color: rgb(255, 255, 255);"> 
										</div>
										<table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454">
											<tbody>
												<tr>
													<td class="legendColorBox">
														<div style="border:1px solid #ccc;padding:1px">
															<div style="width:4px;height:0;border:5px solid rgb(117,117,117);overflow:hidden">
															</div>
														</div>
													</td>
													<td class = "legendLabel">Actual</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#37474f" stroke-width="3" d="M 100 300 C 60.4192 71.02 300 300 180 270 C 122.056 141.82 152.874 194.92 168.284 194.92 C 183.735 194.92 214.638 124.12 230.089 124.12 C 245.499 124.12 276.317 194.92 291.726 194.92 C 307.135 194.92 337.954 141.82 353.363 124.12 C 100 106.42 399.591 71.02 415 53.32">
									</path> -->
									<!-- <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="45.01" cy="53.32" r="7" ></circle> 
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="106.647" cy="124.12" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="168.284" cy="194.92" r="4">
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="230.089" cy="124.12" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="291.726" cy="194.92" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="353.363" cy="124.12" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#37474f" stroke="#ffffff" stroke-width="1" cx="415" cy="53.32" r="4" ></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="45.01" cy="25" r="7" ></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="106.647" cy="95.8" r="4" ></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="168.284" cy="166.6" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="230.089" cy="95.8" r="4" ></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="291.726" cy="166.6" r="4"></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="353.363" cy="95.8" r="4" ></circle>
									<circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#757575" stroke="#ffffff" stroke-width="1" cx="415" cy="25" r="4"></circle> -->
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>