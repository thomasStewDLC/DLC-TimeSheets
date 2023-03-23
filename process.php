<?php
$servername = "127.0.0.1:3306";
$database = "u645485783_0On7k";
$username = "u645485783_82SJ3";
$password = "tm-21-MP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully. ";

if (isset($_POST['save'])) {
$your_name = $_POST['your_name'];
$your_title = $_POST['your_title'];
$company_name = $_POST['company_name'];
$type_of_business = $_POST['type_of_business'];
$website = $_POST['website'];
$email_address = $_POST['email_address'];
$company_phone = $_POST['company_phone'];
$cell_phone = $_POST['cell_phone'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$please_contact_me_by = $_POST['please_contact_me_by'];
$referred_by = $_POST['referred_by'];
$other_authorized_contact_person = $_POST['other_authorized_contact_person'];
$financial_management = $_POST['financial_management'];
$marketing = $_POST['marketing'];
$computer_systems = $_POST['computer_systems'];
$general_management = $_POST['general_management'];
$international_trade = $_POST['international_trade'];
$personnel_management = $_POST['personnel_management'];
$regulatory_compliance = $_POST['regulatory_compliance'];
$education_delivery = $_POST['education_delivery'];
$notify_events = $_POST['notify_events'];
$business_opportunity = $_POST['business_opportunity'];
$general_business_categories = $_POST['general_business_categories'];
$sic_or_naics_code = $_POST['sic_or_naics_code'];
$full_time_employees = $_POST['full_time_employees'];
$part_time_employees = $_POST['part_time_employees'];
$legal_form_of_organization = $_POST['legal_form_of_organization'];
$business_zip = $_POST['business_zip'];
$business_ownership = $_POST['business_ownership'];
$business_operation_years = $_POST['business_operation_years'];
$business_owner_race = $_POST['business_owner_race'];
$business_owner_ethnicity = $_POST['business_owner_ethnicity'];
$business_revenue_last_year = $_POST['business_revenue_last_year'];
$comments = $_POST['comments'];

  $sql = "INSERT INTO sandbox(your_name  your_title  company_name  type_of_business  website  email_address  company_phone
  cell_phone  street_address  city  state  zip_code  please_contact_me_by  referred_by  other_authorized_contact_person
  financial_management  marketing  computer_systems general_management  international_trade  personnel_management
  regulatory_compliance  education_delivery  notify_events  business_opportunity  general_business_categories
  sic_or_naics_code  full_time_employees  part_time_employees  legal_form_of_organization  business_zip  business_ownership
  business_operation_years  business_owner_race  business_owner_ethnicity  business_revenue_last_year comments) values
   ('$your_name', '$your_title','$company_name', '$type_of_business', '$website', '$email_address', '$company_phone', '$cell_phone',
    '$street_address', '$city','$state', '$zip_code', '$please_contact_me_by', '$referred_by', '$other_authorized_contact_person', '$financial_management',
    '$marketing', '$computer_systems','$general_management', '$international_trade', '$personnel_management', '$regulatory_compliance', '$education_delivery', '$notify_events',
    '$business_opportunity', '$general_business_categories','$sic_or_naics_code', '$full_time_employees', '$part_time_employees', '$legal_form_of_organization', '$business_zip', '$business_ownership',
    '$business_operation_years', '$business_owner_race','$business_owner_ethnicity', '$business_revenue_last_yea', '$comments', )";

  if (mysqli_query($conn, $sql)) {
    echo "Submission accepted.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// if (isset($_POST["data"])) {
//   header("Content-Type: text/plain");
//   header("Content-Disposition: attachment; filename=tracking_path.txt");
//   echo $_POST["data"];
// }

mysqli_close($conn);
?>
