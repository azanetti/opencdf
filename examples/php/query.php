<?php
/**
 * Example of contact discovery information using CDF records
 *
 * @author Antony Zanetti <antony.zanetti@axiocode.com>
 */

$domain = 'opencdf.org';

// Get all TXT DNS records
$records = dns_get_record($domain, DNS_TXT);

// Loop through the records
foreach ($records as $record) {
   if (isset($record['txt'])) {
      $rec = $record['txt'];

      // Find all CDF TXT records
      preg_match('/^v=cdf1\sc:([a-z|\.]*)\s(.*)/', $rec, $parts);
      if (count($parts) > 2) {
         $prop = $parts[1];
         $value = $parts[2];

         print("$prop\t$value\n");
      }
   }
}

