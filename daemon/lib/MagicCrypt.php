<?php

namespace org\magiclen\magiccrypt;

class MagicCrypt
{
    private $iv = NULL;
    private $key = NULL;
    private $bit = NULL;
    public function __construct($key = "", $bit = 128, $iv = "")
    {
        switch ($bit) {
            case 64:
                $this->key = MagicCrypt::crc64($key);
                if ($iv != "") {
                    $this->iv = MagicCrypt::crc64($iv);
                } else {
                    $this->iv = _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0);
                }
                break;
            case 128:
            case 192:
            case 128:
                $this->key = _obfuscated_11_("MD5", $key, true);
                break;
            default:
                throw new \Exception("The key must be 8 bytes(64 bits), 16 bytes(128 bits), 24 bytes(192 bits) or 32 bytes(256 bits)!");
            case 192:
                $this->key = _obfuscated_11_("tiger192,3", $key, true);
                break;
            case 256:
                $this->key = _obfuscated_11_("SHA256", $key, true);
                break;
            default:
                if ($iv != "") {
                    $this->iv = _obfuscated_11_("MD5", $iv, true);
                } else {
                    $this->iv = _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0) . _obfuscated_0D390A05330F2C5B173C2514312915011C0A2105181A32_(0);
                }
                $this->bit = $bit;
        }
    }
    public function encrypt($str)
    {
        $_obfuscated_0D38065B0212071F380F315C3909251C0421043C033511_ = _obfuscated_0D220830073511091531310F40221E15110A1C1B0A1022_($str, "aes-256-cbc", $this->key, OPENSSL_RAW_DATA, $this->iv);
        return _obfuscated_0D3734112626393232190538302710042F072D253F1811_($_obfuscated_0D38065B0212071F380F315C3909251C0421043C033511_);
    }
    public function decrypt($str)
    {
        return _obfuscated_0D15032930040C353D221F0C3D071F101F382C08091D11_(_obfuscated_1C322102181A092411_($str), "aes-256-cbc", $this->key, OPENSSL_RAW_DATA, $this->iv);
    }
    private static function crc64Table()
    {
        $_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_ = [];
        $_obfuscated_0D27130D3B5C1A240C313B1738101A025B2A0A05191801_ = -1444268397;
        $_obfuscated_0D1A26362F222B2208171233260913370B342B34082722_ = 0;
        $_obfuscated_0D3C3F2A285C29381637160138153D05173C2B2A032601_ = 1;
        for ($i = 1; $i < 64; $i++) {
            $_obfuscated_0D3C3F2A285C29381637160138153D05173C2B2A032601_ = ($_obfuscated_0D3C3F2A285C29381637160138153D05173C2B2A032601_ << 1) + 1;
        }
        for ($i = 0; $i < 256; $i++) {
            $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ = $i;
            for ($j = 0; $j < 64; $j++) {
                if (($_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ & $_obfuscated_0D1A26362F222B2208171233260913370B342B34082722_) == 0) {
                    $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ = $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ << 1;
                } else {
                    $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ = $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ << 1;
                    $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ = $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ ^ $_obfuscated_0D27130D3B5C1A240C313B1738101A025B2A0A05191801_;
                }
            }
            $_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_[$i] = $_obfuscated_0D2F3D0739162430303E291B050E36310F071B160C1B11_ & $_obfuscated_0D3C3F2A285C29381637160138153D05173C2B2A032601_;
        }
        return $_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_;
    }
    private static function crc64($string)
    {
        if ($_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_ === NULL) {
            $_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_ = MagicCrypt::crc64Table();
        }
        $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_ = -1;
        $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ = -1;
        $_obfuscated_0D020B5C27120D38230F1408153C0C380E3C0509390A32_ = _obfuscated_0D2A02060B09020D0B322B2C1A3508312D134019320322_($string);
        for ($i = 0; $i < $_obfuscated_0D020B5C27120D38230F1408153C0C380E3C0509390A32_; $i++) {
            $_obfuscated_0D3826372E35323D360F191D042818310E3D161A3E1922_ = ($_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_ ^ _obfuscated_0D3015242A161411282723341135233F0B103F01380D22_($string[$i])) & 255;
            $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ = $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 8 ^ $_obfuscated_0D13215B0D5C292D23061F35403503321F260E07030D22_[$_obfuscated_0D3826372E35323D360F191D042818310E3D161A3E1922_];
        }
        $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ = $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ ^ -1;
        return _obfuscated_16102C01_("CCCCCCCC", $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 8 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 16 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 24 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 32 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 40 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 48 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_, $_obfuscated_0D333B5C1036352E1C12325B1D053F033B3033015C3B01_ << 56 >> 56 & $_obfuscated_0D08323F2A0133260A3B112A303D393E3D3C2B21282B11_);
    }
}

?>