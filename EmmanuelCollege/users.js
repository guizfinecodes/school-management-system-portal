function setUpdateAction() {
document.frmUser.action = "pro3.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "pro4.php";
document.frmUser.submit();
}
}