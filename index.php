<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/common.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  <header>
    <div class="container">
      <div class="heading">
        <h1>Application for Employment</h1>
      </div>
      <div class="note">
        <p>pre-employment questionnaire equal opportunity employer</p>
      </div>
      <div class="logo">
        <img src="img/logo.png" alt="logo">
      </div>
    </div>
  </header>
  <form action="form/register.php" method="post">
    <section class="personal-information">
      <div class="container">
        <div class="section-header">
          <h2 class="heading">Personal Information :</h2>
        </div>
        <div class="form-wrapper">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="name">Name (Last Name First Name)</label>
                <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter full name here" required="required">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="ssn">Social Security Number (Last 4 digit)</label>
                <input type="text" class="form-control" id="ssn" name="ssn" placeholder="Last 4 digit of SSN" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="presentAddress">Present Address</label>
                <input type="text" class="form-control" id="presentAddress" name="presentAddress" placeholder="Address" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="presentCity">City</label>
                <input type="text" class="form-control" id="presentCity" name="presentCity" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="presentState">State</label>
                <input type="text" class="form-control" id="presentState" name="presentState" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="presentZipCode">Zip Code</label>
                <input type="text" class="form-control" id="presentZipCode" name="presentZipCode" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="permanentAddress">Permanent Address</label>
                <input type="text" class="form-control" id="permanentAddress" name="permanentAddress" placeholder="Address" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="permanentCity">City</label>
                <input type="text" class="form-control" id="permanentCity" name="permanentCity" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="permanentState">State</label>
                <input type="text" class="form-control" id="permanentState" name="permanentState" required="required">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="permanentZipCode">Zip Code</label>
                <input type="text" class="form-control" id="permanentZipCode" name="permanentZipCode" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required="required">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <label for="secondaryPhone">Secondary Phone no</label>
                <input type="text" class="form-control" id="secondaryPhone" name="secondaryPhone">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="referredBy">Referred By</label>
                <input type="text" class="form-control" id="referredBy" name="referredBy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="employment-desired">
      <div class="container">
        <div class="section-header">
          <h2 class="heading">Employment Desired : </h2>
        </div>
        <div class="form-wrapper">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" required="required">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="preferredStartDate">Date You Can Start</label>
                <input type="text" class="form-control" id="preferredStartDate" name="preferredStartDate" required="required">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="salaryDesired">Salary Desired</label>
                <input type="text" class="form-control" id="salaryDesired" name="salaryDesired" required="required">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <p>Are you employment now ?</p>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="employmentStatusYes" name="employmentStatus" value="yes" checked>
                  <label class="custom-control-label" for="employmentStatusYes">Yes</label>
                </div>

                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="employmentStatusNo" name="employmentStatus" value="no">
                  <label class="custom-control-label" for="employmentStatusNo">No</label>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <p>If so, may we inquire of your present employer ?</p>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="employerInquireYes" name="employerInquire" value="yes" checked>
                  <label class="custom-control-label" for="employerInquireYes">Yes</label>
                </div>

                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="employerInquireNo" name="employerInquire" value="no">
                  <label class="custom-control-label" for="employerInquireNo">No</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <p>Ever applied to this company before ?</p>
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="appliedBeforeYes" name="appliedBefore" value="yes" checked>
                  <label class="custom-control-label" for="appliedBeforeYes">Yes</label>
                </div>

                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="appliedBeforeNo" name="appliedBefore" value="no">
                  <label class="custom-control-label" for="appliedBeforeNo">No</label>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="whereToWork">Where</label>
                <input type="text" class="form-control" id="whereToWork" name="whereToWork">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="whenToWork">When</label>
                <input type="text" class="form-control" id="whenToWork" name="whenToWork">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="education-history">
      <div class="container">
        <div class="section-header">
          <h2 class="heading">Education History : </h2>
        </div>
        <div class="form-wrapper">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="highSchool">High school</label>
                <input type="text" class="form-control" id="highSchool" name="highSchool" placeholder="Name & Location">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="schoolYearsAttended">Years Attended</label>
                <input type="text" class="form-control" id="schoolYearsAttended" name="schoolYearsAttended">
              </div>
            </div>
            <div class="col-2">
              <p>Did You Graduate?</p>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="schoolGraduate" name="schoolGraduate">
                <label class="custom-control-label" for="schoolGraduate">Yes</label>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="subjectOfSchool">Subject Studied</label>
                <input type="text" class="form-control" id="subjectOfSchool" name="subjectOfSchool">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="college">College</label>
                <input type="text" class="form-control" id="college" name="college" placeholder="Name & Location">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="collegeYearsAttended">Years Attended</label>
                <input type="text" class="form-control" id="collegeYearsAttended" name="collegeYearsAttended">
              </div>
            </div>
            <div class="col-2">
              <p>Did You Graduate?</p>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="collegeGraduate" name="collegeGraduate">
                <label class="custom-control-label" for="collegeGraduate">Yes</label>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="subjectOfCollege">Subject Studied</label>
                <input type="text" class="form-control" id="subjectOfCollege" name="subjectOfCollege">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="tradeOrBusiness">Trade, Business or correspondence school &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="form-control" id="tradeOrBusiness" name="tradeOrBusiness" placeholder="Name & Location">
              </div>
            </div>
            <div class="col-2">
              <div class="form-group">
                <label for="otherYearsAttended">Years Attended</label>
                <p>&nbsp;</p>
                <input type="text" class="form-control" id="otherYearsAttended" name="otherYearsAttended">
              </div>
            </div>
            <div class="col-2">
              <p>Did You Graduate?</p>
              <br>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="otherGraduate" name="otherGraduate">
                <label class="custom-control-label" for="otherGraduate">Yes</label>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="subjectOfOther">Subject Studied</label>
                <p>&nbsp;</p>
                <input type="text" class="form-control" id="subjectOfOther" name="subjectOfOther">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="general-information">
      <div class="container">
        <div class="section-header">
          <h2 class="heading">General Information : </h2>
        </div>
        <div class="form-wrapper">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="subjectOfSpecialStudy">Subject of Special Study/Research Work</label>
                <input type="text" class="form-control" id="subjectOfSpecialStudy" name="subjectOfSpecialStudy">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="specialTraining">Special Training</label>
                <input type="text" class="form-control" id="specialTraining" name="specialTraining">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="specialSkills">Special Skills</label>
                <input type="text" class="form-control" id="specialSkills" name="specialSkills">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="militaryOrNaval">U.S Military or Naval Service</label>
                <input type="text" class="form-control" id="militaryOrNaval" name="militaryOrNaval">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="militaryOrNavalRank">Rank</label>
                <input type="text" class="form-control" id="militaryOrNavalRank" name="militaryOrNavalRank">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="former-employers mb-3">
    <div class="container">
      <div class="section-header">
        <h2 class="heading">Former Employers : </h2>
      </div>
      <div class="form-wrapper">
        <div class="row">
          <div class="col-2">
            <div class="form-group">
              <label for="empFromTo">From ~ TO</label>
              <input type="text" class="form-control" id="empFromTo" name="empFromTo[]" placeholder="05/2019~12/19">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nameAndAddressEmployer">Employer Name and Address</label>
              <input type="text" class="form-control" id="nameAndAddressEmployer" name="nameAndAddressEmployer[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerSalary">Salary</label>
              <input type="text" class="form-control" id="formerSalary" name="formerSalary[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerPosition">Position</label>
              <input type="text" class="form-control" id="formerPosition" name="formerPosition[]">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="reasonForLeaving">Reason for Leaving</label>
              <input type="text" class="form-control" id="reasonForLeaving" name="reasonForLeaving[]">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <div class="form-group">
              <label for="empFromTo">From ~ TO</label>
              <input type="text" class="form-control" id="empFromTo" name="empFromTo[]" placeholder="05/2019~12/19">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nameAndAddressEmployer">Employer Name and Address</label>
              <input type="text" class="form-control" id="nameAndAddressEmployer" name="nameAndAddressEmployer[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerSalary">Salary</label>
              <input type="text" class="form-control" id="formerSalary" name="formerSalary[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerPosition">Position</label>
              <input type="text" class="form-control" id="formerPosition" name="formerPosition[]">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="reasonForLeaving">Reason for Leaving</label>
              <input type="text" class="form-control" id="reasonForLeaving" name="reasonForLeaving[]">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <div class="form-group">
              <label for="empFromTo">From ~ TO</label>
              <input type="text" class="form-control" id="empFromTo" name="empFromTo[]" placeholder="05/2019~12/19">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nameAndAddressEmployer">Employer Name and Address</label>
              <input type="text" class="form-control" id="nameAndAddressEmployer" name="nameAndAddressEmployer[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerSalary">Salary</label>
              <input type="text" class="form-control" id="formerSalary" name="formerSalary[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerPosition">Position</label>
              <input type="text" class="form-control" id="formerPosition" name="formerPosition[]">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="reasonForLeaving">Reason for Leaving</label>
              <input type="text" class="form-control" id="reasonForLeaving" name="reasonForLeaving[]">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <div class="form-group">
              <label for="empFromTo">From ~ TO</label>
              <input type="text" class="form-control" id="empFromTo" name="empFromTo[]" placeholder="05/2019~12/19">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nameAndAddressEmployer">Employer Name and Address</label>
              <input type="text" class="form-control" id="nameAndAddressEmployer" name="nameAndAddressEmployer[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerSalary">Salary</label>
              <input type="text" class="form-control" id="formerSalary" name="formerSalary[]">
            </div>
          </div>
          <div class="col-2">
            <div class="form-group">
              <label for="formerPosition">Position</label>
              <input type="text" class="form-control" id="formerPosition" name="formerPosition[]">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="reasonForLeaving">Reason for Leaving</label>
              <input type="text" class="form-control" id="reasonForLeaving" name="reasonForLeaving[]">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <div class="container mb-5">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <button class="btn btn-warning btn-lg mr-2" type="reset">RESET</button>
          <button class="btn btn-success btn-lg" type="submit">SUBMIT</button>
        </div>
      </div>
    </div>
  </form>

  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
