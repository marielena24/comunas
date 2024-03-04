<?php

class StrUtils {
  static function iniciales(string $raw): string {
    return mb_convert_case($raw, MB_CASE_TITLE);
  }

  static function mayusculas(string $raw): string {
    return strtoupper($raw);
  }
}
