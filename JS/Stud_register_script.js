function validateForm() {
  var firstName = document.getElementById('firstname').value;
  var lastName = document.getElementById('lastname').value;
  var collegeEmail = document.getElementById('college_email').value;
  var phoneNo = document.getElementById('phone_no').value;
  var yearOfStudy = document.getElementById('Year_of_Study').value;
  var branch = document.getElementById('Branch').value;
  var section = document.getElementById('Section').value;
  var yearOfGraduation = document.getElementById('Year_of_graduation').value;

  if (!firstName || !lastName || !collegeEmail || !phoneNo || !yearOfStudy || !branch || !section || !yearOfGraduation) {
      alert('Please fill in all the required fields.');
  } else {
      alert('Form submitted successfully!');
  }
}
