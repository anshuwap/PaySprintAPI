<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://paysprint.in/service-api/api/v1/service/verification/bank/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $request_data,
  CURLOPT_HTTPHEADER => [
    "Authorisedkey: ".$auth_key,
    "Token: ".$token,
    "accept: application/json",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
<script>
const options = {
  method: 'POST',
  headers: {
    accept: 'application/json',
    Token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJQQVlTUFJJTlQiLCJ0aW1lc3RhbXAiOjE2MTAwMjYzMzgsInBhcnRuZXJJZCI6IlBTMDAxIiwicHJvZHVjdCI6IldBTExFVCIsInJlcWlkIjoxNjEwMDI2MzM4fQ.buzD40O8X_41RmJ0PCYbBYx3IBlsmNb9iVmrVH9Ix64',
    Authorisedkey: 'YTY1ZDZlYmRiNGIxZjRkNDIxYTZmYzUyZWRmY2Q4ZmU=',
    'content-type': 'application/json'
  },
  body: JSON.stringify({
    refid: '123',
    account_number: '024901541163',
    ifsc: 'ICICI0000249',
    ifsc_details: true
  })
};

// fetch('https://paysprint.in/service-api/api/v1/service/verification/bank/verify', options)
//   .then(response => response.json())
//   .then(response => console.log(response))
//   .catch(err => console.error(err));
</script>