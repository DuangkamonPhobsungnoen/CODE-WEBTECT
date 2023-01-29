function validateForm() {
    let ID_Card = document.forms.myForm.ID_Card.value;
    if (ID_Card.length != 13 || isNaN(ID_Card)) {
        alert("กรอกหมายเลขบัตรประชาชนจำนวน 13 หลัก");
        return false;
    }

    let prefix = document.forms.myForm.prefix.value;
    if (prefix == "") {
        alert("โปรดเลือกคำนำหน้าชื่อ");
        return false;
    }

    let name = document.forms.myForm.name.value;
    if (name.length < 2 || name.length > 20) {
        alert("ชื่อ เป็นตัวอักษรความยาวระหว่าง 2-20 ตัวอักษร");
        return false;
    }

    let last = document.forms.myForm.last.value;
    if (last.length < 2 || last.length > 30) {
        alert("นามสกุล เป็นตัวอักษรความยาวระหว่าง 2-30 ตัวอักษร");
        return false;
    }

    let addess = document.forms.myForm.addess.value;
    if (addess.length < 5) {
        alert("ที่อยู่ ความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let district = document.forms.myForm.district.value;
    if (district.length < 2) {
        alert("ตำบล/แขวง ความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let prefecture = document.forms.myForm.prefecture.value;
    if (prefecture.length < 2) {
        alert("อำเภอ/เขต ความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let province = document.forms.myForm.province.value;
    if (province == "") {
        alert("โปรดเลือกจังหวัด");
        return false;
    }

    let zip = document.forms.myForm.zip.value;
    if (zip.length != 5) {
        alert("รหัสไปรษณีย์ เป็นตัวเลขจำนวน 5 หลัก");
        return false;
    }
}