<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        @media print {
          body {
            margin: 0;
            padding: 0;
            font-size: 20px;
            font-family: "Times New Roman", serif;
          }

          @page {
                  size: A4; /* Set page size to A4 */
    
              }
              /* Exclude headers and footers */
              
  
              @page :left {
                  margin-left: 0;
              }
              @page :bottom {
                  margin-left: 0;
              }
  
        }
      </style>
  </head>
  <body>
    <?php include 'student_table.php'?>
    <p
      style="
        margin: 0cm 0cm 8pt;
        font-size: 11pt;
        font-family: Calibri, sans-serif;
        text-align: center;
      "
    >
      <span style="font-size: 28px; line-height: 107%"> Application</span>
    </p>
    <br><br>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">To,</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">The Principal,</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >Bajaj Institute of Technology, Wardha</span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">Date : <span id="currentDate"></span> &nbsp;</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">&nbsp;</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >Subject : <strong>Application for Refund of Caution Money</strong></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">&nbsp;</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">Respected Sir,</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">
        I, <?php echo " ".$firstname." ".$middlename." ".$lastname." "?>, PRN No. <?php echo $PRN ?>,
        am a regular student during the year <?php echo $Academic_year_of_admission_in_BIT."-".$Year_of_graduation;?>. 
        I have been admitted to B.Tech <?php echo $Branch."."?></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">&nbsp;</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >I would like to kindly request for refund of the caution money that was
        initially deposited during my admission.&nbsp;</span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >&nbsp; &nbsp;Thank you for your attention to this matter.</span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px"><strong><span style="line-height: 107%">&nbsp;</span></strong></span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px"
        ><strong
          ><span style="line-height: 107%"
            >I have attested the following documents with this
            application&nbsp;</span
          ></strong
        ></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >1) Original copy of caution money receipt</span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >2) Xerox copy of Bank passbook</span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">&nbsp;</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">Yours sincerely,</span>
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >

    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >Name : <?php echo " ".$firstname." ".$middlename." ".$lastname." "?></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >PRN : <?php echo $PRN ?></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%"
        >Branch Name : <?php echo $Branch?></span
      >
    </p>
    <p
      style="
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 8pt;
        margin-left: 0cm;
        font-size: 11pt;
        font-family: 'Calibri', sans-serif;
      "
    >
      <span style="font-size: 20px; line-height: 107%">Admission Year :<?php echo $Academic_year_of_admission_in_BIT?></span>
    </p>
  </body>
  <script>
      // Get the current date
      var currentDate = new Date();

      // Get day, month, and year
      var day = currentDate.getDate();
      var month = currentDate.toLocaleString('default', { month: 'long' });
      var year = currentDate.getFullYear();

      // Add suffix to the day
      var suffix = '';
      if (day % 10 === 1 && day !== 11) {
          suffix = 'st';
      } else if (day % 10 === 2 && day !== 12) {
          suffix = 'nd';
      } else if (day % 10 === 3 && day !== 13) {
          suffix = 'rd';
      } else {
          suffix = 'th';
      }

      // Format the date
      var formattedDate = day + suffix + " " + month + " " + year;

      // Display the date in the span element
      document.getElementById("currentDate").textContent = formattedDate;
  </script>
</html>
