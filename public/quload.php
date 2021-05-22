<?php


$GROCY_API_KEY = "9GRuwVZvhkMnWVGIgoOmiRJ8RWEVYOsBjLJc8wStqJPlgxudOQ";
// $GROCY_API_KEY = "";


if ($GROCY_API_KEY == "9GRuwVZvhkMnWVGIgoOmiRJ8RWEVYOsBjLJc8wStqJPlgxudOQ") {
  // code...
  echo "<a href=/manageapikeys>Change API Key</a> <br /> Update API key on line 130 of this file for now";
  die;
}


//echo urlencode (
$qunits = json_decode('[
  {
    "name": "Tsp",
    "description": null,
    "name_plural": "Tsps",
    "plural_forms": null
  },
  {
    "name": "Tbsp",
    "description": null,
    "name_plural": "Tbsps",
    "plural_forms": null
  },
  {
    "name": "Fl Oz",
    "description": null,
    "name_plural": "Fl Ozs",
    "plural_forms": null
  },
  {
    "name": "Cup",
    "description": null,
    "name_plural": "Cups",
    "plural_forms": null
  },
  {
    "name": "Pt",
    "description": null,
    "name_plural": "Pts",
    "plural_forms": null
  },
  {
    "name": "Qt",
    "description": null,
    "name_plural": "Qts",
    "plural_forms": null
  },
  {
    "name": "Gal",
    "description": null,
    "name_plural": "Gals",
    "plural_forms": null
  },
  {
    "name": "Ml",
    "description": null,
    "name_plural": "Mls",
    "plural_forms": null
  },
  {
    "name": "L",
    "description": null,
    "name_plural": "Ls",
    "plural_forms": null
  },
  {
    "name": "Oz",
    "description": null,
    "name_plural": "Ozs",
    "plural_forms": null
  },
  {
    "name": "G",
    "description": null,
    "name_plural": "Gs",
    "plural_forms": null
  },
  {
    "name": "Lb",
    "description": null,
    "name_plural": "Lbs",
    "plural_forms": null
  }
    ]');

//print_r($qunits[0]);
//print_r($qunits);
//print_r(json_decode($qunits));
//print_r(json_decode(json_decode($test)));

foreach ($qunits as $unit) {
// print_r $unit;
//  echo json_encode($unit);
//  echo json_encode(json_encode($unit)) . "<br>";
  send_it((json_encode($unit)));
};


//$data =  "{\n \"name\": \"Oz\",\n \"description\": null,\n \"name_plural\": \"Ozs\",\n \"plural_forms\": null \n}";


//send_it($data);


function send_it($data){

$curl = curl_init();


curl_setopt_array($curl, array(
  CURLOPT_URL => "http://127.0.0.1/api/objects/quantity_units",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
//  CURLOPT_POSTFIELDS => "{\n \"name\": \"Oz\",\n \"description\": null,\n \"name_plural\": \"Ozs\",\n \"plural_forms\": null \n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
    "GROCY-API-KEY: lklDkPIAPNewQulrJRHPdL9vaHCXYZG4eJEGU7U0q1PDa4jJ09",
    "Postman-Token: e33caaae-bb27-42e1-9a66-808913012739,d9910499-7fef-4247-8469-5b6d683a798e",
    "User-Agent: PostmanRuntime/7.11.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache",
    "content-length: 88"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);


curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


}
