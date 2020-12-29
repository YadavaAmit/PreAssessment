<?php 
include('../db_connect.php');
$allData=$_POST['allData'];

$stateId=!empty($_POST['stateId'])?$_POST['stateId']:1;
if($allData=='all'){
$query = "SELECT sum(govt_schools) as totalSchool,SUM(aided_schools) as totalAidedSchools,SUM(private_schools) as totalPrivateSchools,SUM(others_schools) as totalOtherSchools,SUM(govt_teachers) as totalTeachers,SUM(aided_teachers) as totalAidedTeachers,SUM(private_teachers) as totalPrivateTeachers,SUM(other_teachers) as totalOtherTeachers,SUM(govt_students) as totalStudents,SUM(aided_students) as totalAidedStudents,SUM(private_students) as totalPrivateStudents,SUM(other_students) as totalOthersStudents FROM `education_details`";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}elseif($allData=='state'){
	$query = "SELECT sum(govt_schools) as totalSchool,SUM(aided_schools) as totalAidedSchools,SUM(private_schools) as totalPrivateSchools,SUM(others_schools) as totalOtherSchools,SUM(govt_teachers) as totalTeachers,SUM(aided_teachers) as totalAidedTeachers,SUM(private_teachers) as totalPrivateTeachers,SUM(other_teachers) as totalOtherTeachers,SUM(govt_students) as totalStudents,SUM(aided_students) as totalAidedStudents,SUM(private_students) as totalPrivateStudents,SUM(other_students) as totalOthersStudents FROM `education_details` where state=?";
	//echo"<pre>";print_r($query);die;
	$stmt = mysqli_prepare($con, $query);
	mysqli_stmt_bind_param($stmt,'s',$stateId);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}

$queryState = "SELECT * FROM `master_state`";

$stmtState = mysqli_prepare($con, $queryState);
mysqli_stmt_bind_param($stmt);
mysqli_stmt_execute($stmtState);
$resultState = mysqli_stmt_get_result($stmtState);
//echo"<pre>";print_r($row);die;
// start State and UTs Tab 
if($allData =='state'){
	$allData="'".$allData."'";
$response='<section id="serviceSection" class="cources_highlight tab-pane fade in active show" style="margin-top: 5px !important;">
    <div class="container">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
	<div class="col-12 col-sm-12 col-md-4 col-lg-4" style="padding: 0px;">
	<select class="form-control" id="stateId" onchange="AllIndiaSectionFunction('.$allData.')">';
	while($rowState=mysqli_fetch_assoc($resultState)){
		$response.='<option value="'.$rowState['id'].'">'.$rowState['name'].'</option>';
	}
	$response.='</select></div></div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="latest_blog_carousel">
                     <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_first" style="padding-left:0px;">
                        
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#ff884d;color:#fff;">Schools</h3> 
                            <p>Number of Schools</p>
							<p class="counter-count" style="color:#ff884d;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalSchool"]+$row["totalAidedSchools"]+$row["totalPrivateSchools"]+$row["totalOtherSchools"]).'</p>                    
                        </div>
                     <div id="chartdivSchool"></div>						
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_center">
                       
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#4dc4ff;color:#fff;">Teachers</h3> 
                            <p>Number of Teachers</p>
							<p class="counter-count" style="color:#4dc4ff;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalTeachers"]+$row["totalAidedTeachers"]+$row["totalPrivateTeachers"]+$row["totalOtherTeachers"]).'</p>                    
                        </div>
						<div id="chartdivTeacher"></div>	
                    </div>

                   <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_last" style="padding-right:0px;">
                        
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#8bc94d;color:#fff;">Student</h3> 
                             <p>Number of Student</p>
							<p class="counter-count" style="color:#8bc94d;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalStudents"]+$row["totalAidedStudents"]+$row["totalPrivateStudents"]+$row["totalOthersStudents"]).'</p> 
                        </div> 
                       <div id="chartdivStudent"></div>						
                    </div>

                </div>
            </div>             
        </div>
    </div>
</section>';
// start All India Figures Tab 
}elseif($allData=='all'){
	$response='<section id="serviceSectionstates" class="cources_highlight tab-pane fade in active show" style="margin-top: 5px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="latest_blog_carousel">
                     <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_first" style="padding-left:0px;">
                        
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#ff884d;color:#fff;">Schools</h3> 
                            <p>Number of Schools</p>
							<p class="counter-count" style="color:#ff884d;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalSchool"]+$row["totalAidedSchools"]+$row["totalPrivateSchools"]+$row["totalOtherSchools"]).'</p>                    
                        </div>
                     <div id="chartdivSchool"></div>						
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_center">
                       
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#4dc4ff;color:#fff;">Teachers</h3> 
                            <p>Number of Teachers</p>
							<p class="counter-count" style="color:#4dc4ff;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalTeachers"]+$row["totalAidedTeachers"]+$row["totalPrivateTeachers"]+$row["totalOtherTeachers"]).'</p>                    
                        </div>
						<div id="chartdivTeacher"></div>	
                    </div>

                   <div class="col-12 col-sm-12 col-md-4 col-lg-4 single_item single_item_last" style="padding-right:0px;">
                        
                        <div class="blog_title teacherCounter">
                            <h3 style="background-color:#8bc94d;color:#fff;">Student</h3> 
                             <p>Number of Student</p>
							<p class="counter-count" style="color:#8bc94d;font-size: 3.000em;font-weight: 600;margin-bottom: 15px;line-height: 30px;">'.($row["totalStudents"]+$row["totalAidedStudents"]+$row["totalPrivateStudents"]+$row["totalOthersStudents"]).'</p> 
                        </div> 
                       <div id="chartdivStudent"></div>						
                    </div>

                </div>
            </div>             
        </div>
    </div>
</section>';
// start Schemes Tab 
}elseif($allData=='schemes'){
	$response='<section id="serviceSectionSchemes" class="cources_highlight tab-pane fade in active show" style="margin-top: 5px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <hr/>
        <div class="col-3 col-sm-3 col-md-3 col-lg-3" style="padding-left: 0px;padding-right: 0px;"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
            <li class="schemeTab active"><a href="#budgetGlance" data-toggle="tab"> Budget At a Glance</a></li>
            <li class="schemeTab"><a href="#samagraShiksha" data-toggle="tab">Samagra Shiksha</a></li>
            <li class="schemeTab"><a href="#midDay" data-toggle="tab">Mid Day Meal</a></li>
            <li class="schemeTab"><a href="#padhnaLikhna" data-toggle="tab">Padhna Likhna Abhiyan</a></li>
			<li class="schemeTab"><a href="#schemeProviding" data-toggle="tab">Scheme for Providing Education to Madrasas / Minorities</a></li>
            <li class="schemeTab"><a href="#nationalMeans" data-toggle="tab">National Means Cum Merit Scholarship Scheme</a></li>
            <li class="schemeTab"><a href="#nationalScheme" data-toggle="tab">National Scheme of Incentives to Girls for Secondary Education</a></li>
            <li class="schemeTab"><a href="#nationalAward" data-toggle="tab">National Award to Teachers</a></li>
          </ul>
        </div>

        <div class="col-9 col-sm-9 col-md-9 col-lg-9"  style="padding-right: 0px;">
          <!-- Tab panes -->
          <div class="tab-content">
			<div class="tab-pane fade active show in" id="budgetGlance" role="tabpanel" aria-labelledby="GLANCE">
                    <h3 class="text-info font-weight-bold">Budget of the Department of School Education &amp; Literacy</h3>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <thead class="table-active">
                          <tr>
                            <th scope="col">Sr.No. </th>
                            <th scope="col">Scheme </th>
                            <th scope="col" class="text-center">Total Budget Estimates (2020-21) Rs. in Crores </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th colspan="3">Centrally Sponsored Schemes</th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Samagra Shiksha</td>
                            <td class="text-right">38,750.50</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>National Programme of Mid Day Meals in Schools (MDM)</td>
                            <td class="text-right">11,000.00</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Umbrella Programme for Development of Minorities-Education Scheme for Madrasas and Minorities</td>
                            <td class="text-right">220.00</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Padhna Likhna Abhiyan</td>
                            <td class="text-right">10</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Appointment of Language Teachers</td>
                            <td class="text-right">100.00</td>
                          </tr>
                          <tr class="font-weight-bold">
                            <td colspan="2" class="font-weight-bold text-right">Total</td>
                            <td class="font-weight-bold text-right">50,080.50&#8236;</td>
                          </tr>
                          <tr>
                            <th colspan="3">Central Sector Schemes</th>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>National Means Cum Merit Scholarship Scheme</td>
                            <td class="text-right">373.00</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>National Scheme of Incentives to Girls for Secondary Education</td>
                            <td class="text-right">110.00</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>National Award to Teachers (NAT)</td>
                            <td class="text-right">01.50</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Operation Digital Board</td>
                            <td class="text-right">25.00</td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Pradhan Mantri Innovative Learning Programme (DHRUV)</td>
                            <td class="text-right">10.00</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-bold text-right">Total</td>
                            <td class="font-weight-bold text-right">519.50</td>
                          </tr>
                          <tr>
                            <th colspan="3">Other Central Sector Expenditure</th>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Kendriya Vidyalaya Sangathan (KVS)</td>
                            <td class="text-right">5,516.50</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Navodaya Vidyalaya Samiti (NVS)</td>
                            <td class="text-right">3,300.00</td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>National Council of Educational Research and Training (NCERT)</td>
                            <td class="text-right">300.00</td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>Central Tibetan Schools Administration (CTSA)</td>
                            <td class="text-right">66.00</td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>National Bal Bhawan</td>
                            <td class="text-right">22.00</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-bold text-right">Total</td>
                            <td class="font-weight-bold text-right">9,204.50</td>
                          </tr>
                          <tr>
                            <th colspan="3">Other</th>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>National Literacy Mission Authority</td>
                            <td class="text-right">0.50</td>
                          </tr>
                          <tr>
                            <th colspan="3">Establishment Expenditure</th>
                          </tr>
                          <tr>
                            <td>17</td>
                            <td>Secretariat</td>
                            <td class="text-right">35.00</td>
                          </tr>
                          <tr>
                            <td>18</td>
                            <td>Directorate of Adult Education</td>
                            <td class="text-right">5.00</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-bold text-right">Total</td>
                            <td class="font-weight-bold text-right">40.00</td>
                          </tr>
                          <tr>
                            <td colspan="2" class="font-weight-bold text-right">Grand Total</td>
                            <td class="font-weight-bold text-right">59,845.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  
			</div>
			<div class="tab-pane fade" id="samagraShiksha" role="tabpanel" aria-labelledby="v-pills-home-tabg">
                    <h3 class="text-info font-weight-bold">Samagra Shiksha</h3>
                    <div class="font-16"> Samagra Shiksha is a sector-wide development programme which subsumes the then existing Centrally Sponsored Schemes of Sarva Shiksha Abhiyan (SSA), Rashtriya Madhyamik Shiksha Abhiyan (RMSA) and Teacher Education (TE) to help harmonising the implementation mechanisms and transaction costs at all levels, particularly in using state, district and sub-district level systems and resources, besides envisaging one comprehensive strategic plan for the development of school education at the district level. The shift in the focus is from project objectives to improving systems level performance and schooling outcomes which will be the emphasis of the combined Scheme along-with incentivizing states towards improving quality of education. <span id="dots" style="display: inline;"></span><span id="more" style="display: none;"> The Integrated Scheme envisages the ‘school’ as a continuum from pre-school, primary, upper primary, secondary to senior secondary levels. The vision of the Scheme is to ensure inclusive and equitable quality education from pre-school to senior secondary stage in accordance with the Sustainable Development Goal (SDG) for Education.
                      <p></p>
                      <p class="font-16">The major objectives of the Scheme are provision of quality education and enhancing learning outcomes of students; Bridging Social and Gender Gaps in School Education; Ensuring equity and inclusion at all levels of school education; Ensuring minimum standards in schooling provisions; Promoting Vocationalisation of education; Support States in implementation of Right of Children to Free and Compulsory Education (RTE) Act, 2009; Strengthening and up-gradation of State Councils of Educational Research and Training (SCERTs)/State Institutes of Education (SIE) and District Institute of Education and Training (DIET) as nodal agencies for teacher training. The main outcomes of the Scheme are envisaged as Universal Access, Equity and Quality, promoting Vocationalisation of Education and strengthening of Teacher Education Institutions (TEIs).</p>
                      <p class="font-16"> The Samagra Shiksha is implemented as a Centrally Sponsored Scheme by the Department through a single State Implementation Society (SIS) at the State/UT level. It provides for a Governing Council (GC) headed by Education Minister at the National level and a Project Approval Board (PAB) headed by Secretary, Department of School Education &amp; Literacy. The GC is empowered to modify financial and programmatic norms and approve detailed guidelines for implementation within the overall Framework of the scheme. Such modifications will include innovations and interventions to improve the quality of school education. States are expected to bring a single plan for the entire school education sector. </p>
                      <p class="font-16"> Under Samagra Shiksha, an amount of Rs. 30780.81 crore has been sanctioned at Revised Estimates (RE) stage for the financial year 2018-19, out of which Rs. 29349.10 crore (95.35%) has been released as Central Share to States and Union Territories. The fund sharing pattern for the scheme between Centre and States is at present in the ratio of 90:10 for the 8 North-Eastern States viz. Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland, Sikkim and Tripura and 3 Himalayan States viz. Jammu &amp; Kashmir, Himachal Pradesh and Uttarakhand and 60:40 for all other States and Union Territories with Legislature. It is 100% centrally sponsored for Union Territories without Legislature. This is in accordance with the recommendations of the Sub-Group of Chief Ministers on Rationalization of Centrally Sponsored Schemes received in October 2015. </p>
                      <p class="font-16"> The major interventions across all levels of school education under the scheme are: (i) Universal Access including Infrastructure Development and Retention; (ii) Gender and Equity; (iii) Inclusive Education; (iv) Quality; (v) Financial support for Teacher Salary; (vi) Digital Initiatives; (vii) RTE Entitlements including uniforms, textbooks etc;(viii) Pre-school Education; (ix) Vocational Education; (x) Sports and Physical Education; (xi) Strengthening of Teacher Education &amp; Training and (xiii) National Component. Preference in the interventions is given to Educationally Backward Blocks (EBBs), LWE affected districts, Special Focus Districts (SFDs), Border areas and the 115 Aspirational Districts. </p>
                      <p class="font-16"> The main emphasis of the Scheme is on improving quality of school education by focussing on the two T’s – Teacher and Technology. The strategy for all interventions under the Scheme is to enhance the Learning Outcomes at all levels of schooling. The scheme proposes to give flexibility to the States and UTs to plan and prioritize their interventions within the scheme norms and the overall resource envelope available to them. Funds are allocated based on an objective criteria based on the enrolment of students, committed liabilities, learning outcomes and various performance indicators. </p>
                      <p class="font-16"> The Scheme will help in improving the transition rates across various levels of school education and aids in promoting universal access to children to complete school education. The integration of Teacher Education would facilitate effective convergence and linkages between different support structures in school education through interventions such as a unified training calendar, innovations in pedagogy, mentoring and monitoring, etc. This single Scheme will enable the SCERT to become the nodal agency for conduct and monitoring of all in-service training programmes to make it need-focused and dynamic. It would also enable reaping the benefits of technology and widening the access of good quality education across all States and UTs of all sections of the Society. </p>
                      </span></div>
                  
			</div>
			
			<div class="tab-pane fade" id="midDay" role="tabpanel" aria-labelledby="v-pills-profile-tabgj">
                    <h3 class="text-info font-weight-bold"> Mid Day Meal</h3>
                    <div class="font-16"> With a view to enhance enrolment, attendance, retention and simultaneously to improve the nutritional status of children, a Centrally Sponsored Scheme ‘National Programme of Nutritional Support to Primary Education (NP-NSPE)’ was launched on 15th August, 1995. In 2008-09, the scheme was extended to cover children of upper primary classes and the Scheme was renamed as ‘National Programme of Mid-Day Meal in Schools’, popularly known as Mid-Day Meal Scheme covers all school children studying in I - VIII classes in Government and Government-aided schools, Special Training Centres (STCs) and Madrasas &amp; Maktabs supported under Samagra Shiksha. Content and coverage of the scheme has been revised from time to time. <span id="dots16" style="display: none;"></span><span id="more16" style="display: inline;"> <br>
                      <p class="font-16"> The objectives of the Mid-Day Meal Scheme is to address two of the pressing problems for majority of children in India, viz. hunger and education by: </p>
                      <p class="font-16">- Improving the nutritional status of children studying in classes I – VIII in Government and Government-aided schools, Special Training Centers (STCs) and Madrasas &amp; Maktabs supported under Samagra Shiksha.</p>
                      <p class="font-16">- Encouraging poor children belonging to disadvantaged sections to attend school more regularly and help them concentrate on classroom activities.</p>
                      <p class="font-16">- Providing nutritional support to children of elementary stage in drought-affected areas during summer vacations. </p>
                      </span></div>
                  </div>
			<div class="tab-pane fade" id="padhnaLikhna" role="tabpanel" aria-labelledby="v-pills-pla-tabgj">
                    <h3 class="text-info font-weight-bold">Padhna Likhna Abhiyan</h3>
                    <div class="font-16"> A new scheme of Adult Education (Padhna Likhna Abhiyaan) has been approved by the Hon’ble HRM as a centrally sponsored scheme with financial outlay of Rs.224.95 crore including central share of Rs.148.74 crore and State Share of Rs.76.21 crore and physical target of 57 lakh learners to be made literate for implementation in FY 2020-21 with immediate effect. <span id="dots1" style="display: none;"></span><span id="more1" style="display: inline;"> <br>
                      <br>
                      <p class="font-16">The <strong>unique features</strong> of the scheme include the following:</p>
                      <p class="font-16">- The focus of the programme shall be on Basic Literacy component in a four months cycle; priority will be given to aspirational districts.</p>
                      <p class="font-16">- The programme will cover both rural and urban areas, target and budget of States/UTs is indicated in Annexure with details in the enclosed Operational Guidelines. States/UTs will distribute targets to Districts.</p>
                      <p class="font-16">- The scheme shall have a flexible approach and innovative methodologies such as involving school and college students and other volunteers of NCC, NSS and NYKS, for imparting Basic Literacy.</p>
                      <p class="font-16">- There will be a Project Approval Board (PAB) at the national level to approve the Annual Plans of States/UTs. Secretaries of Education will present their Annual Plans, based on district plans, on the portal being developed by NIC, in the PAB meetings.</p>
                      <p class="font-16">- Convergence with projects of M/o Rural Development (MGNREGA), Skill Development, Culture, Information Technology, Finance, Sports and Youth Welfare (NYK), schemes of NCC and NSS, NGOs/Civil Society &amp; CSR sector may be taken up.</p>
                      <p class="font-16">- Formation and involvement of SHGs, Voluntary &amp; User Groups and other community based organizations may be encouraged.</p>
                      <p class="font-16">- Basic Literacy Assessment under the scheme will be conducted by National Institute of Open Schooling (NIOS) for adult learners, thrice a year.</p>
                      <br>
                      <p class="font-16">The operational guidelines of the scheme have been prepared. An online portal pla.mhrd.gov.in has also been developed for monitoring the scheme.</p>
                      </span></div>
                  </div>
				  
				  <div class="tab-pane fade" id="schemeProviding" role="tabpanel" aria-labelledby="v-pills-SPQEM-tabgj">
                    <h3 class="text-info font-weight-bold">Scheme for Providing Education to Madrasas / Minorities</h3>
                    <div class="font-16"> Department of School Education &amp; Literacy is implementing an Umbrella Scheme for Providing Quality Education to Madrasas/Minorities (SPEMM) which comprises of two schemes namely Scheme for Providing Quality Education in Madrasas (SPQEM) and Infrastructure Development of Minority Institutes (IDMI). The scheme is being implemented at the national level. Both the schemes are voluntary in nature. <span id="dots7" style="display: none;"></span> <span id="more7" style="display: inline;"> <br>
                      <br>
                      <p class="font-16">1. <strong>Scheme for Providing Quality Education in Madrasas (SPQEM)</strong> seeks to bring about qualitative improvement in Madrasas to enable Muslim children attain standards of the National education system in formal education subjects.</p>
                      <p class="font-16 font-weight-bold">The salient features of SPQEM scheme are :</p>
                      <p class="font-16">- To encourage traditional institutions like Madrasas and Maktabs by giving financial assistance to introduce Science, Mathematics, Social Studies, Hindi and English in their curriculum so that academic proficiency for classes I-XII is attainable for children studying in these institutions.</p>
                      <p class="font-16">- To provide opportunities to students of these institutions to acquire education comparable to the National Education System especially for secondary and senior secondary levels.</p>
                      <p class="font-16">- To strengthen State Madrasa Boards opting for assistance by enabling them to monitor the Madrasa modernization programme and enhance awareness about education among the Muslim community.</p>
                      <p class="font-16">- To provide quality components in Madrasas such as remedial teaching, assessment and enhancement of learning outcomes, Rashtriya Avishkar Abhiyan etc.</p>
                      <p class="font-16">- To provide in-service training of teachers appointed under the scheme for teaching modern subjects of Science, Mathematics, Social Studies, Hindi and English to improve their pedagogical skills and quality of teaching.</p>
                      <p class="font-16">2. <strong>Infrastructure Development of Minority Institutes (IDMI)</strong> has been operationalised to augment Infrastructure in Private Aided/Unaided Minority Schools/Institutions in order to enhance the quality of education to minority children.</p>
                      <p class="font-16 font-weight-bold">The salient features of IDMI scheme are:</p>
                      <p class="font-16">To facilitate education of minorities by augmenting and strengthening school infrastructure in Minority Institutions (elementary/ secondary/senior secondary schools) in order to expand the facilities for formal education to children of minority communities.</p>
                      <p class="font-16">To encourage educational facilities for girls, children with special needs and those who are most deprived educationally amongst the minorities.</p>
                      </span></div>
                  </div>
				  <div class="tab-pane fade" id="nationalMeans" role="tabpanel" aria-labelledby="v-pills-scholarship-tabgj">
                    <h3 class="text-info font-weight-bold">National Means Cum Merit Scholarship Scheme</h3>
                    <div class="font-16"> <strong>Background:</strong> The ‘National Means-cum-Merit Scholarship Scheme’ (NMMSS) is a Central Sector Scheme launched in May, 2008 to provide scholarships for meritorious students of classes IX to XII. The scheme is boarded on the National Scholarship Portal (NSP).<br>
                      <br>
                      <strong>Objective:</strong> To award scholarships to meritorious students of economically weaker sections to arrest their drop out at class VIII and encourage them to continue their study and complete secondary stage.<br>
                      <br>
                      <strong>Coverage:</strong> The scheme envisages award of one lakh fresh scholarships every year to selected students of class IX and their continuation/renewal in classes X to XII for study in a State Government, Government-aided and Local body schools under the scheme. <span id="dots3" style="display: none;"></span> <span id="more3" style="display: inline;"><br>
                      <br>
                      <p class="font-16"><strong>Scholarship Amount:</strong> An amount of Rs. 12000/- per student per annum. The rate of scholarship has been enhanced from Rs. 6000/- to Rs. 12000/- per year with effect from 1st April, 2017.<br>
                      </p>
                      <p class="font-16"><strong>Eligibility criteria to appear in NMMSS selection test:</strong></p>
                      <p class="font-16">i) Students whose parental income from all sources is not more than Rs. 1,50,000/- per annum are eligible to avail the scholarships.</p>
                      <p class="font-16">ii) The student must have minimum of 55 % marks or equivalent grade in Class VII examination for appearing in selection test for award of scholarship (relaxable by 5% for SC and ST students).</p>
                      <p class="font-16">iii) The student should be studying as regular student in a Government, Government-aided and local body schools. Students of NVS, KVS and residential schools are not entitled for the scholarships.</p>
                      <p class="font-16">iv) There is reservation as per State Government norms.</p>
                      <p class="font-16"><strong>Selection of Fresh Awardee Students:</strong></p>
                      <p class="font-16">i) The selection test is conducted at stage of class-VIII.</p>
                      <p class="font-16">ii) Each State and UT conducts its own test for selection of students for the award of the National Means-cum-Merit Scholarship. Due publicity is given by the State and UT regarding the test. Interested eligible students may contact State Nodal Officer for details (<a href="docs/list_nodal_officer.xlsx" title="List of ‘State Nodal Officers’">List of ‘State Nodal Officers’</a>).</p>
                      <p class="font-16">iii) A student who fulfills the eligibility criteria, must pass both the tests, i.e., Mental Ability Test (MAT) and Scholastic Aptitude Test (SAT) under NMMSS exam with at least 40 % marks in aggregate taken together for these two tests. For the SC/ST students, this cut off is 32% marks.</p>
                      <p class="font-16"><strong>Selection of Renewal Awardee Students:</strong> The awardees should get minimum of 55% marks in Class IX and XI, and a minimum of 60% in Class X for continuance of scholarship (relaxable by 5% for SC/ST candidates).</p>
                      <p class="font-16"><strong>National Scholarship Portal (NSP):</strong> The NSP has been developed by Ministry of Electronics and Information Technology (MeitY) for streamlining and fast tracking the release of Scholarships across Ministries / Departments with efficiency, transparency and reliability.</p>
                      <p class="font-16"><strong>NMMSS Process under NSP:</strong></p>
                      <p class="font-16">To apply for NMMSS, students from different States and UTs, who have qualified in the MAT and SAT under NMMSS must register themselves on NSP.</p>
                      <p class="font-16">The applications are verified online on the portal by the prescribed State authorities.</p>
                      <p class="font-16">The final list of eligible candidates, complete in all respect, is provided to the MHRD by NSP Team for sanction of the scholarship.</p>
                      <p class="font-16">The Ministry of HRD thereafter sanctions funds and releases to State Bank of India (SBI), the implementing bank for the Scheme.</p>
                      <p class="font-16">The SBI disburses the scholarships to students directly by electronic transfer into their bank accounts under Direct Benefit Transfer (DBT) through Public Financial Management System (PFMS).</p>
                      <p class="font-16">To apply for NMMSS or to know more, <a href="https://scholarships.gov.in/" title="National Scholarship Portal" target="_blank">click here</a>.</p>
                      </span> </div>
                  </div>
				  <div class="tab-pane fade" id="nationalScheme" role="tabpanel" aria-labelledby="v-pills-incentive-tabgj">
                    <h3 class="text-info font-weight-bold">National Scheme of Incentives to Girls for Secondary Education</h3>
                    <div class="font-16"> <strong>Background:</strong> The centrally sponsored “National Scheme of Incentive to Girls for Secondary Education (NSIGSE)” was launched in May 2008, to give incentive to students enrolled in class IX. The scheme is now boarded on National Scholarship Portal (NSP).<br>
                      <br>
                      <strong>Objective:</strong> The objective of the scheme is to establish an enabling environment to promote enrolment and reduce drop out of girls belonging to SC/ST communities in secondary schools and ensure their retention up to the 18 years of age.<br>
                      <br>
                      <strong>Coverage:</strong> The scheme covers (i) all girls belonging to SC/ST communities who pass class VIII and (ii) all girls who pass class VIII examination from Kasturba Gandhi Balika Vidyalayas (irrespective of whether they belong to SC/ ST), and enroll in class IX in State/ UT Government, Government-aided and Local Body schools. <span id="dots4" style="display: none;"></span><span id="more4" style="display: inline;">
                      <p></p>
                      <p class="font-16"><strong>Incentive Amount:</strong> A sum of Rs.3000/- is deposited in the name of eligible unmarried girls as fixed deposit on enrolment in class IX, who are entitled to withdraw it along with interest thereon upon reaching 18 years of age and passing Class X examination.</p>
                      <p class="font-16"><strong>Eligibility criteria:</strong></p>
                      <p class="font-16">i) Girls students who pass class VIII and are enrolled in class IX in State/ UT Government, Government-aided and Local Body schools and belonging to SC/ST communities</p>
                      <p class="font-16">ii) All girls who pass class VIII examination from Kasturba Gandhi Balika Vidyalayas (irrespective of whether they belong to SC/ ST)</p>
                      <p class="font-16"><strong>National Scholarship Portal (NSP):</strong> The NSP has been developed by Ministry of Electronics and Information Technology (MeitY) for streamlining and fast tracking the release of Scholarships across Ministries / Departments with efficiency, transparency and reliability.</p>
                      <p class="font-16">i) To apply for NSIGSE, students from different States and UTs, who pass class VIII and enrol in class IX in Government, Government-aided and Local Body schools must register themselves on NSP.</p>
                      <p class="font-16">ii) The applications are verified online on the portal by the prescribed State authorities.</p>
                      <p class="font-16">iii) The final list of eligible candidates, complete in all respect, is provided to the Ministry by NSP Team for sanction of the scholarship.</p>
                      <p class="font-16">iv) The Ministry of HRD thereafter sanctions funds and releases to the Indian Bank and Union Bank of India, the implementing banks for the Scheme.</p>
                      <p class="font-16">v) The banks disburse the scholarships/incentive to students directly by electronic transfer into their bank accounts under Direct Benefit Transfer (DBT) through Public Financial Management System (PFMS).</p>
                      <p class="font-16"><strong>Re-designing:</strong> The NSIGSE Scheme is being re-designed to make it implementable in more effective way.</p>
                      </span> </div>
                  </div>
				  <div class="tab-pane fade" id="nationalAward" role="tabpanel" aria-labelledby="NATIONAL">
                    <h3 class="text-info font-weight-bold">National Award to Teachers</h3>
                    <div class="font-16"> National Award to Teachers was instituted in 1958. The purpose of the scheme is to celebrate the unique contribution of some of the finest teachers in the country and to honor those teachers who through their commitment have not only improved the quality of school education but also enriched the lives of their students. From mid-60s, the function is also held on 5th of September (Teacher`s Day) every year on account of the birthday of Dr. Sarvepalli Radhakrishnan, former President of India. <span id="dots5" style="display: none;"></span><span id="more5" style="display: inline;">
                      <p class="font-16 font-weight-bold"> The features of the new scheme are as under:</p>
                      <p class="font-16">i) Online self-nominations from teachers are invited on  https://mhrd.gov.in. </p>
                      <p class="font-16">ii) All regular teachers are eligible and no minimum years of service is required. This enables meritorious young teachers to apply.</p>
                      <p class="font-16">iii) The number of awards has been rationalized to 45, thereby restoring the prestige of the awards. </p>
                      <p class="font-16">iv) No State, UT or Organization has a quota in the final selection. This encourages them to compete for the awards.</p>
                      <p class="font-16">v) An independent Jury at the National level makes the final selection.</p>
                      </div>
                  </div>
          </div>
        </div>

        <div class="clearfix"></div>
		<hr style="border-top: 4px solid rgba(0,0,0,.1);" />
            </div>             
        </div>
    </div>
</section>';
// start Autonomous Bodies Tab 
}elseif($allData=='autonomous'){
	$response='<section id="serviceSectionAutonomous" class="cources_highlight tab-pane fade in active show" style="margin-top: 5px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <hr/>
        <div class="col-3 col-sm-3 col-md-3 col-lg-3" style="padding-left: 0px;padding-right: 0px;"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
            <li class="schemeTab active"><a href="#budgetGlance" data-toggle="tab">Autonomous Bodies At a Glance</a></li>
            <li class="schemeTab"><a href="#samagraShiksha" data-toggle="tab">Kendriya Vidyalaya Sangathan</a></li>
            <li class="schemeTab"><a href="#midDay" data-toggle="tab">Navodaya Vidyalaya Samiti</a></li>
            <li class="schemeTab"><a href="#padhnaLikhna" data-toggle="tab">National Council of Educational Research and Training</a></li>
			<li class="schemeTab"><a href="#schemeProviding" data-toggle="tab">Central Tibetan Schools Administration</a></li>
            <li class="schemeTab"><a href="#nationalMeans" data-toggle="tab">National Bal Bhawan</a></li>
            <li class="schemeTab"><a href="#nationalScheme" data-toggle="tab">Central Board of Secondary Education</a></li>
            <li class="schemeTab"><a href="#nationalAward" data-toggle="tab">National Institute of Open Schooling</a></li>
			<li class="schemeTab"><a href="#nationalCouncil" data-toggle="tab">National Council for Teacher Education</a></li>
          </ul>
        </div>

        <div class="col-9 col-sm-9 col-md-9 col-lg-9"  style="padding-right: 0px;">
          <!-- Tab panes -->
          <div class="tab-content">
			<div class="tab-pane fade active show in" id="budgetGlance" role="tabpanel" aria-labelledby="GLANCE">
    <h3 class="text-info font-weight-bold">Autonomous Bodies</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="card b8 gk">
          <div class="card-body"> <img src="images/logos/kvs_logo.jpg"><span class="font-16 ml-2 autoFont"> Kendriya Vidyalaya Sangathan </span> </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card b1 gk">
          <div class="card-body"> <img src="images/logos/nvs_logo.jpg"><span class="font-16 ml-2 autoFont"> Navodaya Vidyalaya Samiti </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b2 gk">
          <div class="card-body"> <img src="images/logos/ncert_logo.jpg"><span class="font-16 ml-2 autoFont"> National Council of Educational Research and Training </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b3 gk">
          <div class="card-body"> <img src="images/logos/ctsa_logo.jpg"><span class="font-16 ml-2 autoFont"> Central Tibetan Schools Administration </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b4 gk">
          <div class="card-body"> <img src="images/logos/nbb_logo.jpg"><span class="font-16 ml-2 autoFont"> National Bal Bhawan </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b5  gk">
          <div class="card-body"> <img src="images/logos/cbse_logo.jpg"><span class="font-16 ml-2 autoFont"> Central Board of Secondary Education </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b6 gk">
          <div class="card-body"> <img src="images/logos/nios_logo.jpg"><span class="font-16 ml-2 autoFont"> National Institute of Open Schooling </span> </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card b7 gk">
          <div class="card-body"> <img src="images/logos/ncte_logo.jpg"><span class="font-18 ml-2 autoFont"> National Council for Teacher Education </span> </div>
        </div>
      </div>
    </div>
  </div>
			<div class="tab-pane fade" id="samagraShiksha" role="tabpanel" aria-labelledby="v-pills-home-tabg">
            <div class="row">
    <div class="col-md-12">
      <h3 class="text-info font-weight-bold link_color	"> Kendriya Vidyalaya Sangathan</h3>
      <p class="font-15"> The Kendriya Vidyalaya Sangathan has a total of 1239 schools in India, and 3 abroad. It is one of world`s largest chains of schools. The main objective of the KVS is to cater to the educational needs of the children of transferable Central Government employees including Defence and Para-Military personnel by providing a common programme of education.</p>
    </div>
  </div>
     <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered dash1 total">
        <thead>
        <tr><th colspan="3" class="text-center">Number of KVs - <strong>1242</strong></th>
            </tr></thead>
        <tbody>
          <tr>
            <td class="text-center"><strong><a href="docs/Region wise KVs 1242.pdf" title="Region-wise KVs" target="_blank">Region-wise</a></strong></td>
            <td class="text-center"><strong><a href="docs/State-Wise KVs  1242.xls" title="State-wise KVs">State-wise</a></strong></td>
            <td class="text-center"><strong><a href="docs/District Wise KVs 1242.xls" title="District-wise KVs">District-wise</a></strong></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered dash1 total">
        <tbody><tr colspan="3" class="text-center">
          <td><strong>Regional Offices</strong> - <strong> <a class="text-black collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">25</a> </strong></td>
        </tr>
        </tbody><tbody>
          <tr>
            <td><div class="mt-3 collapse" id="collapseExample" style="">
                <div class="card card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td><strong>S.No.</strong></td>
                          <td><strong>Regional office</strong></td>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>Ahmedabad</td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>Agra</td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>Bangalore</td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>Bhopal</td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>Bhubaneshwar</td>
                        </tr>
                        <tr>
                          <td>6.</td>
                          <td>Chandigarh</td>
                        </tr>
                        <tr>
                          <td>7.</td>
                          <td>Chennai</td>
                        </tr>
                        <tr>
                          <td>8.</td>
                          <td>Dehradun</td>
                        </tr>
                        <tr>
                          <td>9.</td>
                          <td>Delhi</td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>Ernakulam</td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>Gurgaon</td>
                        </tr>
                        <tr>
                          <td>12.</td>
                          <td>Guwahati</td>
                        </tr>
                        <tr>
                          <td>13.</td>
                          <td>Hyderabad</td>
                        </tr>
                        <tr>
                          <td>14.</td>
                          <td>Jabalpur</td>
                        </tr>
                        <tr>
                          <td>15.</td>
                          <td>Jaipur</td>
                        </tr>
                        <tr>
                          <td>16.</td>
                          <td>Jammu</td>
                        </tr>
                        <tr>
                          <td>17.</td>
                          <td>Kolkata</td>
                        </tr>
                        <tr>
                          <td>18.</td>
                          <td>Lucknow</td>
                        </tr>
                        <tr>
                          <td>19.</td>
                          <td>Mumbai</td>
                        </tr>
                        <tr>
                          <td>20.</td>
                          <td>Patna</td>
                        </tr>
                        <tr>
                          <td>21.</td>
                          <td>Raipur</td>
                        </tr>
                        <tr>
                          <td>22.</td>
                          <td>Ranchi</td>
                        </tr>
                        <tr>
                          <td>23.</td>
                          <td>Silchar</td>
                        </tr>
                        <tr>
                          <td>24.</td>
                          <td>Tinsukia</td>
                        </tr>
                        <tr>
                          <td>25.</td>
                          <td>Varanasi</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered dash1 total">
        <tbody><tr colspan="3" class="text-center">
          <td><strong>Zonal Institute of Education Training (ZIET)</strong> - <strong> <a class="text-black collapsed" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">5 </a> </strong></td>
        </tr>
        </tbody><tbody>
          <tr>
            <td><div class="mt-3 collapse" id="collapseExample1" style="">
                <div class="card card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td><strong>S.No.</strong></td>
                          <td><strong>ZIET</strong></td>
                          <td><strong>Website</strong></td>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td>ZIET Mumbai </td>
                          <td><a target="_blank" href="https://zietmumbai.kvs.gov.in/">https://zietmumbai.kvs.gov.in/</a></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>ZIET Bhubaneshwar</td>
                          <td><a target="_blank" href="https://zietbhubaneswar.kvs.gov.in/">https://zietbhubaneswar.kvs.gov.in/</a></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>ZIET Mysore</td>
                          <td><a target="_blank" href="https://zietmysore.kvs.gov.in">https://zietmysore.kvs.gov.in/</a></td>
                        </tr>
                        <tr>
                          <td>4.</td>
                          <td>ZIET Chandigarh</td>
                          <td><a target="_blank" href="https://zietchandigarh.kvs.gov.in">https://zietchandigarh.kvs.gov.in/</a></td>
                        </tr>
                        <tr>
                          <td>5.</td>
                          <td>ZIET Gwalior</td>
                          <td><a target="_blank" href="https://zietgwalior.kvs.gov.in">https://zietgwalior.kvs.gov.in/</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered dash1 total">
        <thead>
        <tr><th colspan="12" class="text-center">Number of students (As on 30.06.2020)</th>
            </tr></thead>
        <tbody>
          <tr>
            <td class="text-center" colspan="2"><strong>SC</strong></td>
            <td class="text-center" colspan="2"><strong>ST</strong></td>
            <td class="text-center" colspan="2"><strong>General</strong></td>
            <td class="text-center" colspan="2"><strong>Total</strong></td>
          </tr>
          <tr>
            <td class="text-center"><strong>Boys</strong></td>
            <td class="text-center"><strong>Girls</strong></td>
            <td class="text-center"><strong>Boys</strong></td>
            <td class="text-center"><strong>Girls</strong></td>
            <td class="text-center"><strong>Boys</strong></td>
            <td class="text-center"><strong>Girls</strong></td>
            <td class="text-center"><strong>Boys</strong></td>
            <td class="text-center"><strong>Girls</strong></td>
          </tr>
          <tr>
            <td class="text-center">133012</td>
            <td class="text-center">105637</td>
            <td class="text-center">38956</td>
            <td class="text-center">32168</td>
            <td class="text-center">276149</td>
            <td class="text-center">236531</td>
            <td class="text-center">623467</td>
            <td class="text-center">513976</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered dash1 total">
        <thead>
        <tr><th colspan="3" class="text-center">Academic Results (Pass%)</th>
            </tr></thead>
        <tbody>
          <tr>
            <td class="text-center"><strong>Year</strong></td>
            <td class="text-center"><strong>Class X</strong></td>
            <td class="text-center"><strong>Class XII</strong></td>
          </tr>
          <tr>
            <td class="text-center"><strong>2020</strong></td>
            <td class="text-center">99.23%</td>
            <td class="text-center">98.62%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>  
			</div>
			
			<div class="tab-pane fade" id="midDay" role="tabpanel" aria-labelledby="v-pills-profile-tabgj">
            <div class="row">
  <div class="col-md-12">
    <h3 class="text-info font-weight-bold link_color"> Navodaya Vidyalaya Samiti</h3>
    <p class="font-15"> Navodaya Vidyalayas are coeducational residential schools established by the Navodaya Vidyalaya Samiti, an autonomous organization under the Ministry of Education, Government of India, to provide quality modern education-including strong component of culture, values, environmental awareness, adventure activities, sports training, physical education and National Integration, to the talented children predominantly from rural area, free of cost, without regard to their socio-economic background.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Number of JNVs - <strong>661</strong></th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong><a href="docs/661 JNVs Region-wise List.xlsx" title="Region-wise JNVs">Region-wise</a></strong></td>
          <td class="text-center"><strong><a href="docs/661 JNVs State-wise List.xlsx" title="State-wise JNVs">State-wise</a></strong></td>
          <td class="text-center"><strong><a href="docs/661 JNVs District-wise List.xlsx" title="District-wise JNVs">District-wise</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><strong>Regional Offices</strong> - <strong> <a class="text-black" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">8 </a> </strong></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Regional office</strong></td>
                        <td><strong>Name of Deputy Commissioner</strong></td>
                        <td><strong>Administrative jurisdiction</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Bhopal</td>
                        <td>Sh. P. S. Sardar</td>
                        <td>Madhya Pradesh, Chhattisgarh, Orissa (113 JNVs)</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Chandigarh</td>
                        <td>Sh. M.A. Muneeb</td>
                        <td>Punjab, Himachal Pradesh, J&amp;K  &amp; Chandigarh U.T. (59 JNVs)</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Hyderabad</td>
                        <td>Sh. N. Uma Maheshwara Rao</td>
                        <td>Andhra Pradesh, Karnataka, Kerala, Pondicherry, A. &amp;N. Islands &amp; Lakshadweep (77 JNVs)</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Jaipur</td>
                        <td>Sh. B.L. Morodia</td>
                        <td>Rajasthan, Haryana, Delhi (65 JNVs)</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Lucknow</td>
                        <td>Sh. G. Chandramouli</td>
                        <td>Uttar Pradesh, Uttaranchal (89 JNVs)</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Patna</td>
                        <td>Dr. D.S. Kumar</td>
                        <td>Bihar, Jharkhand, West Bengal (85 JNVs)</td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Pune</td>
                        <td>Sh. P. Ravi Kumar</td>
                        <td>Maharashtra, Gujarat, Goa, Daman &amp; Diu, Dadra &amp; Nagar Haveli (73 JNVs)</td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>Shillong</td>
                        <td>Ms. S. Deka</td>
                        <td>Meghalaya, Manipur, Mizoram, Arunachal Pradesh, Nagaland, Tripura, Sikkim, Assam (100 JNVs)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><strong>Navodaya Leadership Institutes (NLIs)</strong> - <strong> <a class="text-black" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1">7 </a> </strong></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample1" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Name of NLI</strong></td>
                        <td><strong>Name of Director</strong></td>
                        <td><strong>Address</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Noida</td>
                        <td>Shri Gyanendra Kumar</td>
                        <td>National Navodaya Leadership Institute,  NVS (HQrs.), B-15, Sector-62,Institutional Area , Noida (UP), 201309</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Rangareddy</td>
                        <td>Ms. G Anusuya</td>
                        <td>Navodaya Leadership Institute Rangareddy JNV Ranga Reddy Campus, P.O. Gopan Pally, Lingmpally Mandal Ranga Reddy District Hyderabad Telangana - 500017</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Amritsar</td>
                        <td>Capt. Teena Dhir (Retd.)</td>
                        <td>Navodaya Leadership Institute, JNV Bhilowal(Lopoke),Preet Nagar,Distt. Amtritsar, Punjab-143110</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Goa</td>
                        <td>Shri R L Mali</td>
                        <td>Navodaya Leadership Institute, Canacona,South Goa-403702</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Puri</td>
                        <td>Shri Zuber Ahmed</td>
                        <td>Navodaya Leadership Institute, JNV Campus AT/PO Konark, Dist. Puri, Odisha 752111</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Kamrup</td>
                        <td>Smt. Shyamaleema Dekha</td>
                        <td>Navodaya Leadership Institute, JNV Rangia Campus, P.O. Jamtola, Distt. Kamrup, Assam,781354</td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Udaipur</td>
                        <td>Shri Ambesh Kumar</td>
                        <td>Navodaya Leadership Institute, JNV Campus, Mavli, Dist. Udaipur, Rajasthan - 313203</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="12" class="text-center">Number of students</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center" colspan="2"><strong>SC</strong></td>
          <td class="text-center" colspan="2"><strong>ST</strong></td>
          <td class="text-center" colspan="2"><strong>General</strong></td>
          <td class="text-center" colspan="2"><strong>Total</strong></td>
          <td class="text-center" colspan="2"><strong>Rural</strong></td>
          <td class="text-center" colspan="2"><strong>Urban</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
        </tr>
        <tr>
          <td class="text-center">44638</td>
          <td class="text-center">23098</td>
          <td class="text-center">30990</td>
          <td class="text-center">22498</td>
          <td class="text-center">84431</td>
          <td class="text-center">61591</td>
          <td class="text-center">160059</td>
          <td class="text-center">107187</td>
          <td class="text-center">126993</td>
          <td class="text-center">82063</td>
          <td class="text-center">33066</td>
          <td class="text-center">25124</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Academic Results (Pass%)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Year</strong></td>
          <td class="text-center"><strong>Class X</strong></td>
          <td class="text-center"><strong>Class XII</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2018</strong></td>
          <td class="text-center">97.15%</td>
          <td class="text-center">97.07%</td>
        </tr>
        <tr>
          <td class="text-center"><strong>2019</strong></td>
          <td class="text-center">98.57%</td>
          <td class="text-center">96.62%</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
                  </div>
				  <div class="tab-pane fade" id="padhnaLikhna" role="tabpanel" aria-labelledby="v-pills-profile-tabgj">
            <div class="row">
<div class="col-md-12">
<h3 class="text-info font-weight-bold link_color"> National Council of Educational Research and Training</h3>
<p class="font-15"> The National Council of Educational Research and Training (NCERT) is an autonomous organisation set up in 1961 by the Government of India to assist and advise the Central and State Governments on policies and programmes for qualitative improvement in school education.</p>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><a style="height:50px; width:100%; padding: 10px 10% " class="text-black collapsed" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3"> <strong> Number of constituent units :  8</strong> </a></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample3" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Name</strong></td>
                        <td><strong>Place</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>National Institute of Education (NIE)</td>
                        <td>New Delhi</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Central Institute of Educational Technology (CIET)</td>
                        <td>New Delhi</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Pandit Sunderlal Sharma Central Institute of Vocational Education (PSSCIVE)</td>
                        <td>Bhopal</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Ajmer</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Bhopal</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Bhubaneswar</td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Mysuru</td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>North East Regional Institutes of Education (RIE)</td>
                        <td>Shillong</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><a style="height:50px; width:100%; padding: 10px 10% " class="text-black" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4"> <strong> Number of Regional Institute of Education (RIEs) units : 5</strong> </a></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="collapse mt-3" id="collapseExample4">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Name</strong></td>
                        <td><strong>Place</strong></td>
                        <td><strong>No. of Courses</strong></td>
                        <td><strong>No. of Males</strong></td>
                        <td><strong>No. of Females</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Ajmer</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Bhopal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Bhubaneswar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Regional Institutes of Education (RIE)</td>
                        <td>Mysuru</td>
                        <td>5</td>
                        <td>239</td>
                        <td>585</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>North East Regional Institutes of Education (RIE)</td>
                        <td>Shillong</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><a style="height:50px; width:100%; padding: 10px 10% " class="text-black" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5"> <strong> Number of Demonstration Multipurpose (DM) School : 4 </strong> </a></td>
      </tr>
        </tbody><tbody>
      
      <tr>
        <td><div class="collapse mt-3" id="collapseExample5">
            <div class="card card-body">
              <div class="table-responsive">
                <br><table class="table">
                  <tbody>
                    <tr class="text-center">
                      <th colspan="7"><strong>DM School - RIE, Mysuru</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="7"><strong>Total number of students</strong></th>
                    </tr>
                    <tr>
                      <th>Gen.</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>Total</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td>614</td>
                      <td>159</td>
                      <td>84</td>
                      <td>857</td>
                      <td>425</td>
                      <td>432</td>
                      <td>857</td>
                    </tr>
                    <tr>
                    </tr>
                    <tr class="text-center">
                      <th colspan="8"><strong>Performance of the students</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="4"><strong>Class - X</strong></th>
                      <th colspan="4"><strong>Class - XII</strong></th>
                    </tr>
                    <tr>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                    </tr>
                    <tr>
                      <td colspan="2">2018-19</td>
                      <td colspan="2">95.23%</td>
                      <td colspan="2">2018-19</td>
                      <td colspan="2">84.95</td>
                    </tr>
                  </tbody>
                </table>
                <table class="table">
                  <tbody>
                    <tr class="text-center">
                      <th colspan="7"><strong>DM School 2</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="7"><strong>Total number of students</strong></th>
                    </tr>
                    <tr>
                      <th>Gen.</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>Total</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr class="text-center">
                      <th colspan="8"><strong>Performance of the students</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="4"><strong>Class - X</strong></th>
                      <th colspan="4"><strong>Class - XII</strong></th>
                    </tr>
                    <tr>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                    </tr>
                  </tbody>
                </table>
                <br><table class="table">
                  <tbody>
                    <tr class="text-center">
                      <th colspan="7"><strong>DM School 3</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="7"><strong>Total number of students</strong></th>
                    </tr>
                    <tr>
                      <th>Gen.</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>Total</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  
                  <tr class="text-center">
                    <th colspan="8"><strong>Performance of the students</strong></th>
                  </tr>
                  <tr class="text-center">
                    <th colspan="4"><strong>Class - X</strong></th>
                    <th colspan="4"><strong>Class - XII</strong></th>
                  </tr>
                  <tr>
                    <th colspan="2"><strong>Year</strong></th>
                    <th colspan="2"><strong>Pass % </strong></th>
                    <th colspan="2"><strong>Year</strong></th>
                    <th colspan="2"><strong>Pass % </strong></th>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                  </tr>
                    </tbody>
                  
                </table>
                <table class="table">
                  <tbody>
                    <tr class="text-center">
                      <th colspan="7"><strong>DM School 4</strong></th>
                    </tr>
                    <tr class="text-center">
                      <th colspan="7"><strong>Total number of students</strong></th>
                    </tr>
                    <tr>
                      <th>Gen.</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>Total</th>
                      <th>Boys</th>
                      <th>Girls</th>
                      <th>Total</th>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th colspan="8"><strong>Performance of the students</strong></th>
                    </tr>
                    <tr>
                      <th colspan="4"><strong>Class - X</strong></th>
                      <th colspan="4"><strong>Class - XII</strong></th>
                    </tr>
                    <tr>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                      <th colspan="2"><strong>Year</strong></th>
                      <th colspan="2"><strong>Pass % </strong></th>
                    </tr>
                    <tr>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                      <td colspan="2"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div></td>
      </tr>
        </tbody>
      
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">National Achievement Survey (2017)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Number of students appeared</strong></td>
          <td class="text-center"><strong>Number of Teachers Participated</strong></td>
          <td class="text-center"><strong>Number of Schools participated</strong></td>
        </tr>
        <tr>
          <td class="text-center">36,70,750</td>
          <td class="text-center">4,92,800</td>
          <td class="text-center">1,54,304</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="6" class="text-center">Development and Publication of Textbooks</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Number of Textbook Titles</strong></td>
          <td class="text-center"><strong>Languages in which NCERT’s Textbooks Published</strong></td>
          <td class="text-center"><strong>Textbooks on Vocational Education</strong></td>
          <td class="text-center"><strong>States/UTs taken copyrights of NCERT’s Textbooks</strong></td>
          <td class="text-center"><strong>States/UTs directly purchasing NCERT Textbooks</strong></td>
          <td class="text-center"><strong>Textbooks Published in the Year 2018-19</strong></td>
        </tr>
        <tr>
          <td class="text-center">377</td>
          <td class="text-center">3 (Hindi, English, Urdu)</td>
          <td class="text-center">27</td>
          <td class="text-center">18</td>
          <td class="text-center">9</td>
          <td class="text-center">6,00,00,000</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
</div>
				  
				  <div class="tab-pane fade" id="schemeProviding" role="tabpanel" aria-labelledby="NIEPA1">
<div class="row">
  <div class="col-md-12">
    <h3 class="text-info font-weight-bold link_color"> Central Tibetan School Administration</h3>
    <p class="font-15">CTSA is an autonomous organization under the Ministry of Education with the main objective to run, manage and assist educational institutions set up for the education of Tibetan children living in India while preserving and promoting their culture. It has 67 schools under its control which are located in the places of concentration of Tibetan population.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-striped dash1 total">
      <thead>
        <tr>
          <th colspan="5" class="text-center">No. of Affiliated Schools - <strong>6</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>S.No.</strong></td>
          <td class="text-center"><strong>Name of School</strong></td>
          <td class="text-center"><strong>State</strong></td>
          <td class="text-center"><strong>No. of Student Enrolled</strong></td>
          <td class="text-center"><strong>Category</strong></td>
        </tr>
        <tr>
          <td>1.</td>
          <td>CST, Mussorie</td>
          <td>Uttarakhand</td>
          <td>447</td>
          <td>Sr. Secondary Residential</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>CST, Herbetpur</td>
          <td>Uttarakhand</td>
          <td>421</td>
          <td>Sr. Secondary Day School</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>CST, Shimla</td>
          <td>Himachal Pradesh</td>
          <td>310</td>
          <td>Sr. Secondary Residential</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>CST, Dalhousie</td>
          <td>Himachal Pradesh</td>
          <td>47</td>
          <td>Sr. Secondary Residential</td>
        </tr>
        <tr>
          <td>5.</td>
          <td>CST, Darjeeling</td>
          <td>West Bengal</td>
          <td>207</td>
          <td>Sr. Secondary Residential</td>
        </tr>
        <tr>
          <td>6.</td>
          <td>CST, Kalimpong</td>
          <td>West Bengal</td>
          <td>271</td>
          <td>Sr. Secondary Residential</td>
        </tr>
        <tr>
          <td></td>
          <td><strong>Total</strong></td>
          <td></td>
          <td><strong>1703</strong></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Academic Results (Pass%)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Year</strong></td>
          <td class="text-center"><strong>Class X</strong></td>
          <td class="text-center"><strong>Class XII</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2018</strong></td>
          <td class="text-center">82.06%</td>
          <td class="text-center">91.61%</td>
        </tr>
        <tr>
          <td class="text-center"><strong>2019</strong></td>
          <td class="text-center">91.77%</td>
          <td class="text-center">93.31%</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</div>
				 <div class="tab-pane fade" id="nationalMeans" role="tabpanel" aria-labelledby="Bhawan1">
<div class="row">
  <div class="col-md-12">
    <h3 class="text-info font-weight-bold link_color">National Bal Bhavan</h3>
    <div class="font-15"> The National Bal Bhavan is an Autonomous Body under the Ministry of H.R.D. fully funded by the Government of India. The Head Quarter of National Bal Bhavan is located at New Delhi. Jawahar Bal Bhavan at Mandi village and 54 Bal Bhavan Kendras located all over Delhi are under the administrative control of National Bal Bhavan.</div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="2" class="text-center">Constituents Units</th>
          </tr></thead>
      <tbody>
        <tr>
          <td width="50%">Jawahar Bal Bhawan, MANDI</td>
          <td>0</td>
        </tr>
        <tr>
          <td width="50%">Bal Bhawan Kendras </td>
          <td>54</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="10" class="text-center">Total Enrolment</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Year</strong></td>
          <td class="text-center"><strong>Category</strong></td>
          <td class="text-left"><strong>Gen</strong></td>
          <td class="text-left"><strong>SC</strong></td>
          <td class="text-left"><strong>ST</strong></td>
          <td class="text-left"><strong>OBC</strong></td>
          <td class="text-left"><strong>Diff. Able</strong></td>
          <td class="text-left"><strong>Boys</strong></td>
          <td class="text-left"><strong>Girls</strong></td>
          <td class="text-left"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2018-19</strong></td>
          <td rowspan="2" class="text-center"><strong>Enrolment of NBB, JBB Mandi and BBK</strong></td>
          <td>9384</td>
          <td>2802</td>
          <td>263</td>
          <td>1534</td>
          <td>19</td>
          <td>7171</td>
          <td>6831</td>
          <td><strong>14002</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2019-20</strong><br>
            <strong>(As on 31.03.2019)</strong></td>
          <td>5180</td>
          <td>1728</td>
          <td>148</td>
          <td>839</td>
          <td>15</td>
          <td>4066</td>
          <td>3844</td>
          <td><strong>7910</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
				  <div class="tab-pane fade" id="nationalScheme" role="tabpanel" aria-labelledby="v-pills-profile-tabg">
<div class="row">
  <div class="col-md-12">
    <h3 class="text-info font-weight-bold link_color">Central Board of Secondary Education</h3>
    <p class="font-15"> CBSE envisions a robust, vibrant and holistic school education that will engender excellence in every sphere of human endeavour. The Board is committed to provide quality education to promote intellectual, social and cultural vivacity among its learners. It works toward evolving a learning process and environment, which empowers the future citizens to become global leaders in the emerging knowledge society. The Board emphasis on holistic development of learners by providing a stress-free learning environment that will develop competent, confident and enterprising citizens who will promote harmony and peace.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Number of Affiliated Schools<strong></strong></th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong><a href="docs/cbse_state_wise.pdf" title="State-wise List" target="_blank">State-wise</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><strong>Regional Offices</strong> - <strong> <a class="text-black collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">16</a> </strong></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Regional office</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Ajmer</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Allahabad</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Bhubaneswar</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Chennai</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Chandigarh</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Delhi (East)</td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Delhi (West)</td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>Dehradun</td>
                      </tr>
                      <tr>
                        <td>9.</td>
                        <td>Guwahati</td>
                      </tr>
                      <tr>
                        <td>10.</td>
                        <td>Noida</td>
                      </tr>
                      <tr>
                        <td>11.</td>
                        <td>Panchkula</td>
                      </tr>
                      <tr>
                        <td>12.</td>
                        <td>Patna</td>
                      </tr>
                      <tr>
                        <td>13.</td>
                        <td>Thiruvananthapuram</td>
                      </tr>
                      <tr>
                        <td>14.</td>
                        <td>Bengaluru</td>
                      </tr>
                      <tr>
                        <td>15.</td>
                        <td>Pune</td>
                      </tr>
                      <tr>
                        <td>16.</td>
                        <td>Bhopal</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="12" class="text-center">Number of Registered Students</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center" colspan="8"><strong>Class-X</strong></td>
        </tr>
        <tr>
          <td class="text-center" colspan="2"><strong>SC</strong></td>
          <td class="text-center" colspan="2"><strong>ST</strong></td>
          <td class="text-center" colspan="2"><strong>General</strong></td>
          <td class="text-center" colspan="2"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
        </tr>
        <tr>
          <td class="text-center">81937</td>
          <td class="text-center">60366</td>
          <td class="text-center">34467</td>
          <td class="text-center">28583</td>
          <td class="text-center">602709</td>
          <td class="text-center">452796</td>
          <td class="text-center">1034769</td>
          <td class="text-center">739530</td>
        </tr>
        <tr>
          <td class="text-center" colspan="8"></td>
        </tr>
        <tr>
          <td class="text-center" colspan="8"><strong>Class-XII</strong></td>
        </tr>
        <tr>
          <td class="text-center" colspan="2"><strong>SC</strong></td>
          <td class="text-center" colspan="2"><strong>ST</strong></td>
          <td class="text-center" colspan="2"><strong>General</strong></td>
          <td class="text-center" colspan="2"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
          <td class="text-center"><strong>Boys</strong></td>
          <td class="text-center"><strong>Girls</strong></td>
        </tr>
        <tr>
          <td class="text-center">50584</td>
          <td class="text-center">43296</td>
          <td class="text-center">25086</td>
          <td class="text-center">22212</td>
          <td class="text-center">436435</td>
          <td class="text-center">341612</td>
          <td class="text-center">695569</td>
          <td class="text-center">522824</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Academic Results (Pass%)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Year</strong></td>
          <td class="text-center"><strong>Class X</strong></td>
          <td class="text-center"><strong>Class XII</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2018</strong></td>
          <td class="text-center">86.70%</td>
          <td class="text-center">83.01%</td>
        </tr>
        <tr>
          <td class="text-center"><strong>2019</strong></td>
          <td class="text-center">91.10%</td>
          <td class="text-center">83.40%</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
				  <div class="tab-pane fade" id="nationalAward" role="tabpanel" aria-labelledby="v-pills-settings-tabg">
<div class="row">
  <div class="col-md-12">
    <h3 class="text-info font-weight-bold link_color">National Institute of Open Schooling</h3>
    <p class="font-15"> National Institute of Open Schooling (NIOS) is the largest open school in the world Providing relevant, continuing and holistic education up to pre-degree level through Open and Distance Learning System. NIOS is contributing to the Universalisation of School Education and is catering to the educational needs of the prioritized target groups for equity and social justice. </p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Number of Affiliated Schools<strong></strong></th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Region-wise</strong></td>
          <td class="text-center"><strong>State-wise</strong></td>
          <td class="text-center"><strong>District-wise</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><strong>Regional Offices</strong> - <strong> <a class="text-black collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">25</a> </strong></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Regional office</strong></td>
                        <td><strong>Name of the Regional Director</strong></td>
                        <td><strong>Address</strong></td>
                        <td><strong>Contact Details</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Delhi/NCR</td>
                        <td>Dr. T. N. Giri</td>
                        <td>A 31, Institutional Area, NH 24, Sector-62, NOIDA, Uttar Pradesh<br></td>
                        <td>Tel: 01202404914/01202404915<br>
                          Fax: 01202404916<br>
                          Email: rcdelhi@nios.ac.in </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Hyderabad</td>
                        <td>Sh. Anil Kumar</td>
                        <td>IV Floor, Sri Krishna Devaraya, Telugu Basha Nilayam, Trust, No 4-4-8, Sultan Bazar, Hyderabad - 500095</td>
                        <td>Tel: 04024162859/040-24162859<br>
                          Fax: 040-2406071<br>
                          Email: rchyderabad@nios.ac.in /rdhyderabad@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Pune</td>
                        <td>Dr. Saumya Rajan</td>
                        <td>Pune, Maharashtra</td>
                        <td>Tel: 0205444667/020-5444667<br>
                          Fax: 020-344667<br>
                          Email: /rdpune@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Kolkata</td>
                        <td>Sh. Manish Chugh</td>
                        <td>Kolkata, West Bengal</td>
                        <td>Tel: 0334797714/033-4797714<br>
                          Fax: 033-4797707<br>
                          Email: /rdkolkota@nios.ac.in </td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Guwahati</td>
                        <td>Shri Manoj Jain</td>
                        <td>Building of Assam Publication Board, 1 st Floor, Near Board of Secondary Education Assam, Bamunimaidan, Guwahati – 781021</td>
                        <td>Tel: 03612650541/0361-2650541<br>
                          Fax: 0361-265054<br>
                          Email: rcguwahati@nios.ac.in /rdguwahati@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>6.</td>
                        <td>Chandigarh</td>
                        <td>Ms. Tarun Punia</td>
                        <td>YMCA Complex, Sector-11C, Chandigarh – 160011</td>
                        <td>Tel: 0172744915/0172-744915<br>
                          Fax: 0172-744952<br>
                          Email: /rdchandigarh@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>7.</td>
                        <td>Kochi</td>
                        <td>Dr.Alok Gupta</td>
                        <td>Kochi, Kerala</td>
                        <td>Tel: 04842310032/0484-2310032<br>
                          Fax: 0484-231003<br>
                          Email: rdkochi@nios.ac.in /rckochi@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>8.</td>
                        <td>Jaipur</td>
                        <td>Sh. K.L Gupta</td>
                        <td>Jaipur, Rajasthan</td>
                        <td>Tel: 01412292818/0141-2292818<br>
                          Fax: 0141-229281<br>
                          Email: rcjaipur@nios.ac.in /rdjaipur@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>9.</td>
                        <td>Patna</td>
                        <td>Parampreet Singh</td>
                        <td>Patna, Bihar</td>
                        <td>Tel: 0612236551/0612-236551<br>
                          Email: /rdpatna@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>10.</td>
                        <td>Allahabad</td>
                        <td>Sh. Aditi Ranjan Rout</td>
                        <td>Allahabad, UP</td>
                        <td>Tel: 05322548154/0532-2548154<br>
                          Fax: 05322548149<br>
                          Email: /rdallahabad@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>11.</td>
                        <td>Kota</td>
                        <td>Sh. Sanjay Kumar</td>
                        <td>II Floor, 2-P-1, Vigyan Vihar, Kota, Rajasthan</td>
                        <td>Tel: 7442428555</td>
                      </tr>
                      <tr>
                        <td>12.</td>
                        <td>Bhopal</td>
                        <td>Sh V.S. Raveendran</td>
                        <td>Manas Bhawan, Shymla Hills, Bhopal-462002, Madhya Pradesh</td>
                        <td>Tel: 07552660331/07552660331<br>
                          Fax: 07552661842<br>
                          Email: rcbhopal@nios.ac.in /rdbhopal@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>13.</td>
                        <td>Dehradun</td>
                        <td>Dr. (Ms.) Sandhya Kumar</td>
                        <td>Amrit Plaza Building, Near chowk, Post Office Ajapur Kalan, Kedarpur Village Rd, Bengali Kothi, Banjarawala, Dehradun, Uttarakhand-248001</td>
                        <td>Tel: 01353208053/0135-3208053<br>
                          Email: rcdehradun@nios.ac.in /rddehradun@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>14.</td>
                        <td>Bhubaneswar</td>
                        <td>Sh. R. D. Mahapatra</td>
                        <td>ELTI Campus, Maitrivihar, Chandrashekhar Pur, Bhubaneswar-751023, Odisha</td>
                        <td>Tel: 06742302688/0674-2302688<br>
                          Email: /rdbbsr@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>15.</td>
                        <td>Vishakhapatnam</td>
                        <td>Sh. Anil Kumar</td>
                        <td>5th Floor,B Block,VUDA Complex,Siripuram,Visakhapatnam,Andhra Pradesh</td>
                        <td>Fax: 0891-279271</td>
                      </tr>
                      <tr>
                        <td>16.</td>
                        <td>Bengaluru</td>
                        <td>Sh. V Sathish</td>
                        <td>Office of the Director (Vocational Education) 3 rd Floor, PUE Bhawan, 18th Cross Sampig Road, Malleswaram, Bengaluru-500012</td>
                        <td>Tel: 08023464223/080-23464223<br>
                          Fax: 080-2346422<br>
                          Email: /rdbengaluru@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>17.</td>
                        <td>Gandhi Nagar</td>
                        <td>Sh. V.Santhanam</td>
                        <td>M.S. Building, D Block, 7th floor, Near Pathikashram, Sector-11. Gandhinagar – 382011, Gujarat</td>
                        <td>Tel: 07923220410/079-23220410<br>
                          Fax: 079-2322041<br>
                          Email: /rdgandhinagar@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>18.</td>
                        <td>Raipur</td>
                        <td>Smt. Sheela Ravi</td>
                        <td>Raipur, Chhattisgarh</td>
                        <td>Tel: 07712442147/0771-2442147<br>
                          Fax: 0771-244216<br>
                          Email: rcraipur@nios.ac.in </td>
                      </tr>
                      <tr>
                        <td>19.</td>
                        <td>Ranchi</td>
                        <td>Dr. Rajeev Prasad</td>
                        <td>Zila School Hostel Premises, Near Shahid Chowk, Ranchi, Jharkhand 834001</td>
                        <td>Tel: 06512217030<br>
                          Fax: 06512217060<br>
                          Email: /rcranchi@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>20.</td>
                        <td>Chennai</td>
                        <td>Sh. P. Ravi</td>
                        <td>Kamrajar Salai, Lady Willingdon Campus, Triplicane, Chennai-600005, Tamilnadu</td>
                        <td>Tel: 04428442237/044-28442237<br>
                          Fax: 044-2844223<br>
                          Email: /rdchennai@nios.ac.in </td>
                      </tr>
                      <tr>
                        <td>21.</td>
                        <td>Dharamshala</td>
                        <td>Ms. Rachna Bhatia</td>
                        <td>2nd Floor, Chamunda Complex (Near Income Tax Office), Dari Road, District Kangra, Dharamshala,-176057 (H.P.)</td>
                        <td>Tel: 08192222251<br>
                          Fax: 01892222351<br>
                          Email: /rddharamshala@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>22.</td>
                        <td>Gangtok</td>
                        <td>-</td>
                        <td>Teacher`s Guest House, Upper Syari, Gangtok, East Sikkim, Sikkim -737102</td>
                        <td>Email: rcgangtok@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>23.</td>
                        <td>Amethi</td>
                        <td>-</td>
                        <td>Lakhara House, Munshiganj Road, Sarvanpur, Amethi, Uttar Pradesh</td>
                        <td>Email: rcamethi@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>24.</td>
                        <td>Jammu</td>
                        <td>Sh. Naipal Singh</td>
                        <td>105, Karan Nagar opposite Trikuta Yatri Niwas Ved Mandir Road Amphalla Jammu 180005</td>
                        <td>Tel: 8492885457<br>
                          Email: /rcjammu@nios.ac.in</td>
                      </tr>
                      <tr>
                        <td>25.</td>
                        <td>Delhi/NCR</td>
                        <td>Dr. T. N. Giri</td>
                        <td>A 31, Institutional Area, NH 24, Sector-62, NOIDA, Uttar Pradesh<br></td>
                        <td>Tel: 01202404914/01202404915<br>
                          Fax: 01202404916<br>
                          Email: rcdelhi@nios.ac.in </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="5" class="text-center">Number of Registered Students (2018-2019)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center" colspan="5"><strong>Academic courses</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>SC</strong></td>
          <td class="text-center"><strong>ST</strong></td>
          <td class="text-center"><strong>OBC</strong></td>
          <td class="text-center"><strong>General</strong></td>
          <td class="text-center"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center">44276</td>
          <td class="text-center">36272</td>
          <td class="text-center">47049</td>
          <td class="text-center">377921</td>
          <td class="text-center">505518</td>
        </tr>
        <tr>
          <td class="text-center" colspan="5"><strong>Open Basic Education (OBE)</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>SC</strong></td>
          <td class="text-center"><strong>ST</strong></td>
          <td class="text-center"><strong>OBC</strong></td>
          <td class="text-center"><strong>General</strong></td>
          <td class="text-center"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center">687</td>
          <td class="text-center">95</td>
          <td class="text-center">1642</td>
          <td class="text-center">7529</td>
          <td class="text-center">9953</td>
        </tr>
        <tr>
          <td class="text-center" colspan="5"><strong>Vocational Education</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>SC</strong></td>
          <td class="text-center"><strong>ST</strong></td>
          <td class="text-center"><strong>OBC</strong></td>
          <td class="text-center"><strong>General</strong></td>
          <td class="text-center"><strong>Total</strong></td>
        </tr>
        <tr>
          <td class="text-center">2774</td>
          <td class="text-center">1561</td>
          <td class="text-center">3970</td>
          <td class="text-center">14673</td>
          <td class="text-center">22978</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="4" class="text-center">Academic Results (Certified%)</th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong>Year</strong></td>
          <td class="text-center"><strong>Class X</strong></td>
          <td class="text-center"><strong>Class XII</strong></td>
          <td class="text-center"><strong>Vocational</strong></td>
        </tr>
        <tr>
          <td class="text-center"><strong>2018</strong></td>
          <td class="text-center">35.80</td>
          <td class="text-center">38.24</td>
          <td class="text-center">77.40</td>
        </tr>
        <tr>
          <td class="text-center"><strong>2019</strong></td>
          <td class="text-center">36.37</td>
          <td class="text-center">35.23</td>
          <td class="text-center">73.64</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

<div class="tab-pane fade" id="nationalCouncil" role="tabpanel" aria-labelledby="Council1">
<div>
  <h3 class="text-info font-weight-bold link_color">National Council for Teacher Education</h3>
  <p class="font-16">The National Council for Teacher Education, in its previous status since 1973, was an advisory body for the Central and State Governments on all matters pertaining to teacher education, with its Secretariat in the Department of Teacher Education of the National Council of Educational Research and Training (NCERT). Despite its commendable work in the academic fields, it could not perform essential regulatory functions, to ensure maintenance of standards in teacher education and preventing proliferation of substandard teacher education institutions. The National Policy on Education (NPE), 1986 and the Programme of Action thereunder, envisaged a National Council for Teacher Education with statutory status and necessary resources as a first step for overhauling the system of teacher education.</p>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Total No. of Teacher Education Institutes - <strong>16917</strong></th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong><a href="docs/TEIs.pdf" title="State-wise List" target="_blank">State-wise List of Institutes</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <tbody><tr colspan="3" class="text-center">
        <td><strong>Regional Committees</strong> - <strong> <a class="text-black collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">4</a> </strong></td>
      </tr>
      </tbody><tbody>
        <tr>
          <td><div class="mt-3 collapse" id="collapseExample" style="">
              <div class="card card-body">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><strong>S.No.</strong></td>
                        <td><strong>Regional Committees</strong></td>
                        <td><strong>Address</strong></td>
                        <td><strong>Contact Details</strong></td>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>Eastern Regional Committee (ERC), Bhubaneshwar</td>
                        <td>15, Neel Kanth Nagar, Nayapalli, Bhubaneshwar – 751012, Orissa</td>
                        <td>Phone: 0674-2562793, 2563252, 2563156<br>
                          Fax: 0674-2564873, <br>
                          E-mail: erc@ncte-india.org </td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Western Regional Committee (WRC), Bhopal</td>
                        <td>G-7, Sector-10, Dwarka, New Delhi-110075</td>
                        <td>Phone: 011-20892153,20892155<br>
                          E-mail: wrc@ncte-india.org</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Northern Regional Committee (NRC), Jaipur</td>
                        <td>G-7, Sector-10, Dwarka, New Delhi-110075</td>
                        <td>Phone: 011-20892151/52(O),<br>
                          E-mail: nrc@ncte-india.org</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Southern Regional Committee (SRC), Bangalore</td>
                        <td>G-7, Sector-10, Dwarka, New Delhi-110075</td>
                        <td>Phone: 011-20892171<br>
                          E-mail: src@ncte-india.org</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12">
    <table class="table table-striped table-bordered dash1 total">
      <thead>
      <tr><th colspan="3" class="text-center">Total No. of Courses - <strong>24199</strong></th>
          </tr></thead>
      <tbody>
        <tr>
          <td class="text-center"><strong><a href="docs/Courses.pdf" title="State-wise List" target="_blank">State-wise List of Courses</a></strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
          </div>
        </div>

        <div class="clearfix"></div>
		<hr style="border-top: 4px solid rgba(0,0,0,.1);" />
            </div>             
        </div>
    </div>
</section>';
}
// $dataArr=array();
// $dataArr['row']=$row;
// $dataArr['response']=$response;
echo $response;
?>
<!-- End Popular Courses Highlight -->