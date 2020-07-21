<link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css">
<script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bootstrap-datepicker-master/dist/locales/bootstrap-datepicker.th.min.js"></script>

<link rel="stylesheet" href="ChartJs/Chart.min.css">
<script src="ChartJs/Chart.bundle.min.js"></script>

<div class="jumbotron">
    <h1>ฟอร์มบันทึกข้อมูลเบาหวาน</h1>
</div>

<form action="index.php" method="post">
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="idcard" class="font-weight-bold">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="idcard" name="idcard" value="3521300259825">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="date_register" class="font-weight-bold">วันที่ลงทะเบียน</label>
                <input type="text" class="form-control" id="date_register" name="date_register" value="2017-03-31">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="date_register" class="font-weight-bold">DM Number</label>
                <p>2535</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">ยศ/คำนำหน้าชื่อ</label>
                <input type="text" class="form-control" id="yot" name="yot" value="นาย">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="name" class="font-weight-bold">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="ถาวร">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="surname" class="font-weight-bold">นามสกุล</label>
                <input type="text" class="form-control" id="surname" name="surname" value="กาวาท">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label class="font-weight-bold">วัน-เดือน-ปี เกิด</label>
                <input type="text" class="form-control" id="birthDate" name="birthDate" value="1960-06-05">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">ส่วนสูง</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="height" name="height" value="164" aria-describedby="aria-height">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-height">ซม.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">น้ำหนัก</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="weight" name="weight" value="60" aria-describedby="aria-weight">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-weight">กก.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">รอบเอว</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="waist" name="waist" value="85" aria-describedby="aria-waist">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-waist">กก.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">อุณหภูมิ</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="temp" name="temp" value="36.1" aria-describedby="aria-temp">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-temp">กก.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">Pulse</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="pulse" name="pulse" value="95" aria-describedby="aria-pulse">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-pulse">ครั้ง/นาที</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">Rate</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="rate" name="rate" value="20" aria-describedby="aria-rate">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-rate">ครั้ง/นาที</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">BMI</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="bmi" name="bmi" value="19.71" aria-describedby="bmi">
                    <div class="input-group-append">
                        <span class="input-group-text" id="bmi">กก.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">ความดัน</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="sys" name="sys" value="127" aria-describedby="sys">
                    <div class="input-group-append">
                        <span class="input-group-text" id="temp">/</span>
                    </div>
                    <input type="text" class="form-control" id="dia" name="dia" value="61" >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md col-lg-3">
            <div class="form-group">
                <label for="cigarette_date" class="font-weight-bold">ประวัติบุหรี่</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="cigarette" id="cigarette1">
                    <label class="custom-control-label" for="cigarette1">สูบบุหรี่</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="cigarette" id="cigarette2">
                    <label class="custom-control-label" for="cigarette2">ไม่สูบบุหรี่</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="cigarette" id="cigarette3" checked="checked">
                    <label class="custom-control-label" for="cigarette3">N/A</label>
                </div>
            </div>
        </div>
        <div class="col-md col-lg-4">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">แพทย์ผู้ทำการตรวจรักษา</label>
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" value="MD100 เชาวรินทร์ อุ่นเครือ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="retinal_exam_date" class="font-weight-bold">Retinal Exam</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="retinal_exam_date" name="retinal_exam_date" value="2020-06-26">
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="retinal_exam" id="retinal_exam1">
                    <label class="custom-control-label" for="retinal_exam1">No DR</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="retinal_exam" id="retinal_exam2">
                    <label class="custom-control-label" for="retinal_exam2">Mild NPDR</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="retinal_exam" id="retinal_exam3">
                    <label class="custom-control-label" for="retinal_exam3">Moderate NPDR</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="retinal_exam" id="retinal_exam4" checked="checked">
                    <label class="custom-control-label" for="retinal_exam4">Severe NPDR</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="retinal_exam" id="retinal_exam5">
                    <label class="custom-control-label" for="retinal_exam5">PDR</label>
                </div>
            </div>
            <div class="form-group">
                <label for="retinal_exam_img">เลือกรูป</label>
                <input type="file" class="form-control-file" name="retinal_exam_img" id="retinal_exam_img" accept="image/*" onchange="loadFile(event,'retinalExample')">
                <div>
                    <img id="retinalExample" class="img-fluid img-thumbnail" style="max-width: 350px; max-height: 350px;" src="images/retinal-exam.jpg">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="foot_exam_date" class="font-weight-bold">Foot Exam</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="foot_exam_date" name="foot_exam_date" value="2020-06-26">
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="foot_exam" id="foot_exam1">
                    <label class="custom-control-label" for="foot_exam1">Low Risk</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="foot_exam" id="foot_exam2" checked="checked">
                    <label class="custom-control-label" for="foot_exam2">Moderate Risk</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="foot_exam" id="foot_exam3">
                    <label class="custom-control-label" for="foot_exam3">Hight Risk</label>
                </div>
            </div>
            <div class="form-group">
                <label for="foot_exam_img">เลือกรูป</label>
                <input type="file" class="form-control-file" name="foot_exam_img" id="foot_exam_img" accept="image/*" onchange="loadFile(event,'footExample')">
                <div>
                    <img id="footExample" class="img-fluid img-thumbnail" style="max-width: 350px; max-height: 350px;" src="images/foot-exam.png">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="teeth_date" class="font-weight-bold">ตรวจสุขภาพฟัน</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="teeth_date" name="teeth_date">
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="teeth" id="teeth1">
                    <label class="custom-control-label" for="teeth1">ได้รับการตรวจ</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="teeth" id="teeth2" checked="checked">
                    <label class="custom-control-label" for="teeth2">ไม่ได้รับการตรวจ</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label class="font-weight-bold">การวินิจฉัย</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="diag" id="diag1">
                    <label class="custom-control-label" for="diag1">DM type1</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="diag" id="diag2" checked="checked">
                    <label class="custom-control-label" for="diag2">DM type2</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="diag" id="diag3">
                    <label class="custom-control-label" for="diag3">Uncertain type</label>
                </div>
            </div>
            <div class="form-group">
                <label for="diag_date" class="font-weight-bold">การวินิจฉัยครั้งแรก ประมาณ พ.ศ.</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="diag_date" name="diag_date" value="2013-12-19">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">โรคร่วม HT</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="disease_ht" id="disease_ht1">
                    <label class="custom-control-label" for="disease_ht1">No</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="disease_ht" id="disease_ht2" checked="checked">
                    <label class="custom-control-label" for="disease_ht2">Essential HT</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="disease_ht" id="disease_ht2">
                    <label class="custom-control-label" for="disease_ht2">Secondary HT</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="disease_ht" id="disease_ht2">
                    <label class="custom-control-label" for="disease_ht2">Uncertain type</label>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">โรคร่วมอื่นๆ</label>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc1">
                    <label class="custom-control-label" for="disease_etc1">Neuropathy</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc2">
                    <label class="custom-control-label" for="disease_etc2">Heart Failure</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc3">
                    <label class="custom-control-label" for="disease_etc3">Nephropathy</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc4">
                    <label class="custom-control-label" for="disease_etc4">CVD</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc5">
                    <label class="custom-control-label" for="disease_etc5">IHD</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc6">
                    <label class="custom-control-label" for="disease_etc6">Foot ulcer</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc7">
                    <label class="custom-control-label" for="disease_etc7">Retinopathy</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="disease_etc[]" id="disease_etc8" checked="checked">
                    <label class="custom-control-label" for="disease_etc8">Dyslipidemia</label>
                </div>
            </div>
            <div class="form-group">
                <label for="disease_etc_date" class="font-weight-bold">การวินิจฉัยโรคร่วมครั้งแรกเมื่อ</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="disease_etc_date" name="disease_etc_date" value="2013-12-19">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">Foot care</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="foot_care" id="foot_care1">
                    <label class="custom-control-label" for="foot_care1">ให้ความรู้</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="foot_care" id="foot_care2" checked="checked">
                    <label class="custom-control-label" for="foot_care2">ไม่ได้ให้ความรู้</label>
                </div>
            </div>
            <div class="form-group">
                <label for="foot_care_date" class="font-weight-bold">วันที่ให้ความรู้</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="foot_care_date" name="foot_care_date" value="">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">Nutrition</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="nutrition" id="nutrition1">
                    <label class="custom-control-label" for="nutrition1">ให้ความรู้</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="nutrition" id="nutrition2" checked="checked">
                    <label class="custom-control-label" for="nutrition2">ไม่ได้ให้ความรู้</label>
                </div>
            </div>
            <div class="form-group">
                <label for="nutrition_date" class="font-weight-bold">วันที่ให้ความรู้</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nutrition_date" name="nutrition_date" value="">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">Exercise</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="exercise" id="exercise1">
                    <label class="custom-control-label" for="exercise1">ให้ความรู้</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="exercise" id="exercise2" checked="checked">
                    <label class="custom-control-label" for="exercise2">ไม่ได้ให้ความรู้</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exercise_date" class="font-weight-bold">วันที่ให้ความรู้</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="exercise_date" name="exercise_date" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">BS</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="bs" name="bs" value="202" aria-describedby="aria-bs">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-bs">mg/dl</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">HbA1c</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="hba1c" name="hba1c" value="9.3" aria-describedby="aria-hba1c">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-hba1c">%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">LDL</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="ldl" name="ldl" value="32" aria-describedby="aria-ldl">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-ldl">mg/dl</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">Creatinine</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="creatinine" name="creatinine" value="1.28" aria-describedby="aria-creatinine">
                    <div class="input-group-append">
                        <span class="input-group-text" id="aria-creatinine">mg/dl</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="urine_protein" class="font-weight-bold">Urine protein</label>
                <input type="text" class="form-control" id="urine_protein" name="urine_protein" value="">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="ua" class="font-weight-bold">UA</label>
                <input type="text" class="form-control" id="ua" name="ua" value="">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="microalbuminuria" class="font-weight-bold">Microalbuminuria</label>
                <input type="text" class="form-control" id="microalbuminuria" name="microalbuminuria" value="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            <button type="button" class="btn btn-primary btn-lg btn-block">บันทึกข้อมูล</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            &nbsp;
        </div>
    </div>
</form>
<script>
var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['พค 61','กค 62','สค 62','ตค 62','พค 63'],
        datasets: [{
            label: 'เบาหวาน',
            backgroundColor: 'rgb(255, 99, 202)',
            borderColor: 'rgb(255, 99, 132)',
            fill: false,
            data: [84,85,92,144,163],
            lineTension: 0.1
        }]
    },

    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        responsive: true
    }
});

</script>
<script>
// Upload Preview Image
var loadFile = function(event,divId) {
    var output = document.getElementById(divId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};


$('#date_register').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#birthDate').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#retinal_exam_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#foot_exam_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#teeth_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});


$('#diag_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#disease_etc_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#foot_care_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#nutrition_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});

$('#exercise_date').datepicker({
    format: "yyyy-mm-dd",
    language: "th",
    todayHighlight: true,
    clearBtn: true,
    todayBtn: true
});



</script>