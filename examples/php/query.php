<?php
/**
 * Contact Discovery Framework
 *
 * Example of contact discovery information using CDF records
 *
 * @author Antony Zanetti <antony.zanetti@axiocode.com>
 * @copyright (c) 2014, Antony Zanetti
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

// Domain to check
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

