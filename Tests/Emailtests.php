<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
  private function ValidEmail(): void
      {
        $this->AssertEquals(true, filter_var("yoann.mazza1@gmail.com", FILTER_VALIDATE_EMAIL));
      }
      private function InvalidEmail(): void
          {
            $this->AssertEquals(false, filter_var("bonjour", FILTER_VALIDATE_EMAIL));
          }

}
 ?>
