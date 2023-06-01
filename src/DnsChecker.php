<?php

namespace kirplesha\DnsChecker;

class DnsChecker
{
    /**
     * Get info about dns records
     * @param string $domain
     * @return array
     * @throws \Exception
     */
    public static function getDnsRecords(string $domain): array
    {
        if (empty($domain)) {
            throw new \InvalidArgumentException('Domain is empty');
        }

        $records = dns_get_record($domain, DNS_ALL);
        if (empty($records)) {
            throw new \Exception('Error in getting dns info');
        }

        return $records;
    }

}