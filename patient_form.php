<style>
.myInput{
    border: 1px solid #565656;
    font-size: 1rem;
    height: 2.5em;
    line-height: 1.5;
    border-radius: 4px;
}
</style>

<link rel="stylesheet" href="bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css">
<script src="bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bootstrap-datepicker-master/dist/locales/bootstrap-datepicker.th.min.js"></script>

<div class="jumbotron">
    <h1>ฟอร์มบันทึกข้อมูลเบาหวาน</h1>
</div>

<form action="index.php" method="post">
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="idcard" class="font-weight-bold">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" id="idcard" name="idcard" value="3521300298138">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="date_register" class="font-weight-bold">วันที่ลงทะเบียน</label>
                <input type="text" class="form-control" id="date_register" name="date_register" value="26-06-2020">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="date_register" class="font-weight-bold">DM Number</label>
                <p>3428</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="yot" class="font-weight-bold">ยศ/คำนำหน้าชื่อ</label>
                <input type="text" class="form-control" id="yot" name="yot" value="นาง">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="name" class="font-weight-bold">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" value="นาง">
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="surname" class="font-weight-bold">นามสกุล</label>
                <input type="text" class="form-control" id="surname" name="surname" value="สิทธิหล้า">
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
                    <input type="text" class="form-control" id="height" name="height" value="148" aria-describedby="aria-height">
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
                    <input type="text" class="form-control" id="weight" name="weight" value="148" aria-describedby="aria-weight">
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
                    <input type="text" class="form-control" id="waist" name="waist" value="81" aria-describedby="aria-waist">
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
                    <input type="text" class="form-control" id="pulse" name="pulse" value="84" aria-describedby="aria-pulse">
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
                    <input type="text" class="form-control" id="bmi" name="bmi" value="22.83" aria-describedby="bmi">
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
                    <input type="text" class="form-control" id="sys" name="sys" value="115" aria-describedby="sys">
                    <div class="input-group-append">
                        <span class="input-group-text" id="temp">/</span>
                    </div>
                    <input type="text" class="form-control" id="dia" name="dia" value="60" >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md col-lg-4">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">แพทย์ผู้ทำการตรวจรักษา</label>
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" value="น.พ.ทดสอบ นามสกุล">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label for="retinal_exam_date" class="font-weight-bold">Retinal Exam</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="retinal_exam_date" name="retinal_exam_date">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="retinal_exam" id="retinal_exam1">
                    <label class="form-check-label" for="retinal_exam1">No DR</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="retinal_exam" id="retinal_exam2">
                    <label class="form-check-label" for="retinal_exam2">Mild NPDR</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="retinal_exam" id="retinal_exam3">
                    <label class="form-check-label" for="retinal_exam3">Moderate NPDR</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="retinal_exam" id="retinal_exam4" checked="checked">
                    <label class="form-check-label" for="retinal_exam4">Severe NPDR</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="retinal_exam" id="retinal_exam5">
                    <label class="form-check-label" for="retinal_exam5">PDR</label>
                </div>
            </div>
            <div class="form-group">
                <label for="retinal_exam_img">เลือกรูป</label>
                <input type="file" class="form-control-file" name="retinal_exam_img" id="retinal_exam_img" accept="image/*" onchange="loadFile(event,'retinalExample')">
                <div>
                    <img id="retinalExample" style="width: 350px;" src="images/retinal-exam.jpg">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="foot_exam_date" class="font-weight-bold">Foot Exam</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="foot_exam_date" name="foot_exam_date">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="foot_exam" id="foot_exam1">
                    <label class="form-check-label" for="foot_exam1">Low Risk</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="foot_exam" id="foot_exam2" checked="checked">
                    <label class="form-check-label" for="foot_exam2">Moderate Risk</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="foot_exam" id="foot_exam3">
                    <label class="form-check-label" for="foot_exam3">Hight Risk</label>
                </div>
            </div>
            <div class="form-group">
                <label for="foot_exam_img">เลือกรูป</label>
                <input type="file" class="form-control-file" name="foot_exam_img" id="foot_exam_img" accept="image/*" onchange="loadFile(event,'retinalExample')">
                <div>
                    <img id="retinalExample" style="width: 350px;" src="images/foot-exam.png">
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="teeth_date" class="font-weight-bold">ตรวจสุขภาพฟัน</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="teeth_date" name="teeth_date">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="teeth" id="teeth1">
                    <label class="form-check-label" for="teeth1">ได้รับการตรวจ</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="teeth" id="teeth2" checked="checked">
                    <label class="form-check-label" for="teeth2">ไม่ได้รับการตรวจ</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="form-group">
                <label class="font-weight-bold">การวินิจฉัย</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diag" id="diag1">
                    <label class="form-check-label" for="diag1">DM type1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diag" id="diag2" checked="checked">
                    <label class="form-check-label" for="diag2">DM type2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="diag" id="diag2" checked="checked">
                    <label class="form-check-label" for="diag2">Uncertain type</label>
                </div>
            </div>
            <div class="form-group">
                <label for="diag_date" class="font-weight-bold">การวินิจฉัยครั้งแรก ประมาณ พ.ศ.</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="diag_date" name="diag_date">
                </div>
            </div>
            
        </div>
        <div class="col-md">
            <div class="form-group">
                <label for="doctor_name" class="font-weight-bold">โรคร่วม HT</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disease_ht" id="disease_ht1" checked="checked">
                    <label class="form-check-label" for="disease_ht1">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disease_ht" id="disease_ht2">
                    <label class="form-check-label" for="disease_ht2">Essential HT</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disease_ht" id="disease_ht2">
                    <label class="form-check-label" for="disease_ht2">Secondary HT</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="disease_ht" id="disease_ht2">
                    <label class="form-check-label" for="disease_ht2">Uncertain type</label>
                </div>
            </div>
        </div>
        <div class="col-md">
            xxx
        </div>
    </div>







    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">โรคร่วมอื่นๆ</label>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Neuropathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Heart Failure
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Nephropathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">CVD
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">IHD
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Foot ulcer
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Retinopathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Dyslipidemia
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                    การวินิจฉัยโรคร่วมครั้งแรก ประมาณ พ.ศ. <input class="input" type="date" name="disease_etc_date" id="disease_etc_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">ประวัติบุหรี่</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="cigarette">สูบบุหรี่
                    </label>
                    <label class="radio">
                        <input type="radio" name="cigarette" checked="checked">ไม่สูบบุหรี่
                    </label>
                    <label class="radio">
                        <input type="radio" name="cigarette">N/A
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Foot care</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="foot_care">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="foot_care" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="foot_care_date" id="foot_care_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Nutrition</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="nutrition">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="nutrition" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="nutrition_date" id="nutrition_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Exercise</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="exercise">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="exercise" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                    
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="exercise_date" id="exercise_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">BS</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="bs" value="202"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">HbA1c</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="hba1c" value="9.3"> </p>
                        <p class="control"><a class="button is-static">%</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">LDL</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="ldl" value="32"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">Creatinine</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="creatinine" value="1.28"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Urine protein</label>
                <div class="control"><input class="input" type="text" name="urine_protein" value=""></div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">UA</label>
                <div class="control"><input class="input" type="text" name="ua" value=""></div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">Microalbuminuria</label>
                <div class="control"><input class="input" type="text" name="microalbuminuria" value=""></div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <!-- <img src="images/bs.png" alt="images"> -->
            </div>
        </div>
    </div>

    <div class="field is-grouped-centered">
        <div class="control">
            <button class="button is-primary is-large is-fullwidth">บันทึกข้อมูล</button>
            <input type="hidden" name="action" value="save_form">
            <!-- <input type="hidden" name="page" value="patient_form"> -->
        </div>
    </div>





</form>
<script>
// Upload Preview Image
var loadFile = function(event,divId) {
    var output = document.getElementById(divId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};

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



</script>