<?php

namespace kirplesha\DnsChecker\Test\Feature;

use kirplesha\DnsChecker\DnsChecker;
use Orchestra\Testbench\TestCase;

class InitTest extends TestCase
{

    public function testCase()
    {
        $dnsChecker = DnsChecker::getDnsRecords('google.com');
        $this->assertIsArray($dnsChecker);
        $this->assertContains('google.com', $dnsChecker[0]);
    }

    public function testException()
    {
        DnsChecker::getDnsRecords('');
        $this->expectException(\InvalidArgumentException::class);
    }
}