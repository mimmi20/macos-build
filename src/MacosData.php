<?php

/**
 * This file is part of the macos-build package.
 *
 * Copyright (c) 2019-2024, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace MacosBuild;

final class MacosData
{
    public const array VERSIONS = [
        '4K78' => '10.0',
        '5G64' => '10.1',
        '6C115' => '10.2',

        '7B85' => '10.3',
        '7B86' => '10.3',
        '7C107' => '10.3.1',
        '7D24' => '10.3.2',
        '7F28' => '10.3.2',
        '7F44' => '10.3.3',
        '7H63' => '10.3.4',
        '7M34' => '10.3.5',
        '7R28' => '10.3.6',
        '7S215' => '10.3.7',
        '7U16' => '10.3.8',
        '7W98' => '10.3.9',

        '8A428' => '10.4',
        '8A432' => '10.4',
        '8B15' => '10.4.1',
        '8B17' => '10.4.1',
        '8C46' => '10.4.2',
        '8C47' => '10.4.2',
        '8E45' => '10.4.2',
        '8E90' => '10.4.2',
        '8E102' => '10.4.2',
        '8F46' => '10.4.3',
        '8G32' => '10.4.4',
        '8G1165' => '10.4.4',
        '8H14' => '10.4.5',
        '8G1454' => '10.4.5',
        '8I127' => '10.4.6',
        '8I1119' => '10.4.6',
        '8J135' => '10.4.7',
        '8J2135a' => '10.4.7',
        '8K1079' => '10.4.7',
        '8N5107' => '10.4.7',
        '8L127' => '10.4.8',
        '8L2127' => '10.4.8',
        '8P135' => '10.4.9',
        '8P2137' => '10.4.9',
        '8R218' => '10.4.10',
        '8R2218' => '10.4.10',
        '8R2232' => '10.4.10',
        '8S165' => '10.4.11',
        '8S2167' => '10.4.11',

        '9A581' => '10.5',
        '9B18' => '10.5.1',
        '9C31' => '10.5.2',
        '9D34' => '10.5.3',
        '9E17' => '10.5.4',
        '9F33' => '10.5.5',
        '9G55' => '10.5.6',
        '9J61' => '10.5.7',
        '9L30' => '10.5.8',
        '9L31a' => '10.5.8',

        '10A432' => '10.6',
        '10B504' => '10.6.1',
        '10C540' => '10.6.2',
        '10D573' => '10.6.3',
        '10D578' => '10.6.3',
        '10F569' => '10.6.4',
        '10H574' => '10.6.5',
        '10J567' => '10.6.6',
        '10J869' => '10.6.7',
        '10K540' => '10.6.8',
        '10K549' => '10.6.8',

        '11A511' => '10.7',
        '11B26' => '10.7.1',
        '11C74' => '10.7.2',
        '11D50' => '10.7.3',
        '11E53' => '10.7.4',
        '11G63' => '10.7.5',

        '12A269' => '10.8',
        '12B19' => '10.8.1',
        '12C54' => '10.8.2',
        '12D78' => '10.8.3',
        '12E27' => '10.8.4b1',
        '12E30' => '10.8.4b2',
        '12E33a' => '10.8.4b3',
        '12E36' => '10.8.4b4',
        '12E40' => '10.8.4b5',
        '12E47' => '10.8.4b6',
        '12E52' => '10.8.4b7',
        '12E55' => '10.8.4',
        '12F9' => '10.8.5b1',
        '12F13' => '10.8.5b2',
        '12F17' => '10.8.5b3',
        '12F20' => '10.8.5b4',
        '12F23' => '10.8.5b5',
        '12F26' => '10.8.5b6',
        '12F30' => '10.8.5b7',
        '12F33' => '10.8.5b8',
        '12F36' => '10.8.5b9',
        '12F37' => '10.8.5',

        '13A476u' => '10.9b1',
        '13A497d' => '10.9b2',
        '13A510d' => '10.9b3',
        '13A524d' => '10.9b4',
        '13A538g' => '10.9b5',
        '13A558' => '10.9b6',
        '13A569' => '10.9b7',
        '13A584' => '10.9b8',
        '13A598' => '10.9',
        '13A603' => '10.9',
        '13B27' => '10.9.1b1',
        '13B35' => '10.9.1b2',
        '13B40' => '10.9.1b3',
        '13B42' => '10.9.1',
        '13C32' => '10.9.2b1',
        '13C39' => '10.9.2b2',
        '13C44' => '10.9.2b3',
        '13C48' => '10.9.2b4',
        '13C53' => '10.9.2b5',
        '13C59' => '10.9.2b6',
        '13C62' => '10.9.2b7',
        '13C64' => '10.9.2',
        '13D12' => '10.9.3b1',
        '13D17' => '10.9.3b2',
        '13D21' => '10.9.3b3',
        '13D28' => '10.9.3b4',
        '13D33' => '10.9.3b5',
        '13D38' => '10.9.3b6',
        '13D43' => '10.9.3b7',
        '13D45a' => '10.9.3b8',
        '13D55' => '10.9.3b9',
        '13D61' => '10.9.3b10',
        '13D62' => '10.9.3b10',
        '13D65' => '10.9.3',
        '13E9' => '10.9.4b1',
        '13E16' => '10.9.4b2',
        '13E19' => '10.9.4b3',
        '13E25' => '10.9.4b4',
        '13E28' => '10.9.4',
        '13F7' => '10.9.5b1',
        '13F12' => '10.9.5b2',
        '13F14' => '10.9.5b3',
        '13F18' => '10.9.5b4',
        '13F24' => '10.9.5b5',
        '13F31' => '10.9.5b6',
        '13F34' => '10.9.5',

        '14A389' => '10.10',
        '14B25' => '10.10.1',
        '14C109' => '10.10.2',
        '14C1510' => '10.10.2',
        '14C1514' => '10.10.2',
        '14C2043' => '10.10.2',
        '14C2513' => '10.10.2',
        '14D72i' => '10.10.3b1',
        '14D87h' => '10.10.3b2',
        '14D98g' => '10.10.3b3',
        '14D105g' => '10.10.3b4',
        '14D113c' => '10.10.3b5',
        '14D127' => '10.10.3b6',
        '14D131' => '10.10.3',
        '14E7f' => '10.10.4b1',
        '14E11f' => '10.10.4b2',
        '14E17e' => '10.10.4b3',
        '14E26a' => '10.10.4b4',
        '14E33b' => '10.10.4b5',
        '14E36b' => '10.10.4b6',
        '14E46' => '10.10.4',
        '14F6a' => '10.10.5b1',
        '14F19a' => '10.10.5b2',
        '14F25a' => '10.10.5b3',
        '14F27' => '10.10.5',

        '15A178w' => '10.11b1',
        '15A204h' => '10.11b2',
        '15A216g' => '10.11b3',
        '15A226f' => '10.11b4',
        '15A235d' => '10.11b5',
        '15A244d' => '10.11b6',
        '15A263e' => '10.11b7',
        '15A279b' => '10.11b8',
        '15A282b' => '10.11',
        '15A284' => '10.11',
        '15B17c' => '10.11.1b1',
        '15B22c' => '10.11.1b2',
        '15B30a' => '10.11.1b3',
        '15B38b' => '10.11.1b4',
        '15B42' => '10.11.1',
        '15C27e' => '10.11.2b1',
        '15C31f' => '10.11.2b2',
        '15C40a' => '10.11.2b3',
        '15C47a' => '10.11.2b4',
        '15C48a' => '10.11.2b5',
        '15C50' => '10.11.2',
        '15D9c' => '10.11.3b1',
        '15D13b' => '10.11.3b2',
        '15D21' => '10.11.3',
        '15E27e' => '10.11.4b1',
        '15E33e' => '10.11.4b2',
        '15E39c' => '10.11.4b3',
        '15E39d' => '10.11.4b3',
        '15E49a' => '10.11.4b4',
        '15E56a' => '10.11.4b5',
        '15E61b' => '10.11.4b6',
        '15E64a' => '10.11.4b7',
        '15E65' => '10.11.4',
        '15F18b' => '10.11.5b1',
        '15F24b' => '10.11.5b2',
        '15F28b' => '10.11.5b3',
        '15F31a' => '10.11.5b4',
        '15F34' => '10.11.5',
        '15G7a' => '10.11.6b1',
        '15G12a' => '10.11.6b2',
        '15G19a' => '10.11.6b3',
        '15G24b' => '10.11.6b4',
        '15G26a' => '10.11.6b5',
        '15G31' => '10.11.6',
        '15G1004' => '10.11.6',
        '15G1108' => '10.11.6',

        '16A201w' => '10.12b1',
        '16A239j' => '10.12b2',
        '16A254g' => '10.12b3',
        '16A270f' => '10.12b4',
        '16A286a' => '10.12b5',
        '16A294a' => '10.12b6',
        '16A304a' => '10.12b7',
        '16A313a' => '10.12b8',
        '16A319' => '10.12',
        '16A320' => '10.12',
        '16A322' => '10.12',
        '16A323' => '10.12',
        '16B2327e' => '10.12.1b1',
        '16B2333a' => '10.12.1b2',
        '16B2338c' => '10.12.1b3',
        '16B2548a' => '10.12.1b4',
        '16B2553a' => '10.12.1b5',
        '16B2555' => '10.12.1',
        '16B2657' => '10.12.1',
        '16C32e' => '10.12.2b1',
        '16C32f' => '10.12.2b1',
        '16C41b' => '10.12.2b2',
        '16C48b' => '10.12.2b3',
        '16C53a' => '10.12.2b4',
        '16C60b' => '10.12.2b5',
        '16C63a' => '10.12.2b6',
        '16C67' => '10.12.2',
        '16C68' => '10.12.2',
        '16D12b' => '10.12.3b1',
        '16D17a' => '10.12.3b2',
        '16D25a' => '10.12.3b3',
        '16D30a' => '10.12.3b4',
        '16D32' => '10.12.3',
        '16E144f' => '10.12.4b1',
        '16E154a' => '10.12.4b2',
        '16E163f' => '10.12.4b3',
        '16E175b' => '10.12.4b4',
        '16E183b' => '10.12.4b5',
        '16E189a' => '10.12.4b6',
        '16E191a' => '10.12.4b7',
        '16E192b' => '10.12.4b8',
        '16E195' => '10.12.4',
        '16F43c' => '10.12.5b1',
        '16F54b' => '10.12.5b2',
        '16F60a' => '10.12.5b3',
        '16F67a' => '10.12.5b4',
        '16F71b' => '10.12.5b5',
        '16F73' => '10.12.5',
        '16G8c' => '10.12.6b1',
        '16G12b' => '10.12.6b2',
        '16G16b' => '10.12.6b3',
        '16G18a' => '10.12.6b4',
        '16G23a' => '10.12.6b5',
        '16G24b' => '10.12.6b6',

        '17A264c' => '10.13b1',
        '17A291j' => '10.13b2',
        '17A291m' => '10.13b2',
        '17A306f' => '10.13b3',
        '17A315i' => '10.13b4',
        '17A330h' => '10.13b5',
        '17A344b' => '10.13b6',
        '17A352a' => '10.13b7',
        '17A358a' => '10.13b8',
        '17A360a' => '10.13b9',
        '17A362a' => '10.13',
        '17A365' => '10.13',
        '17A405' => '10.13',
        '17B25c' => '10.13.1b1',
        '17B35a' => '10.13.1b2',
        '17B42a' => '10.13.1b3',
        '17B45a' => '10.13.1b4',
        '17B48' => '10.13.1',
        '17C60c' => '10.13.2b1',
        '17C67b' => '10.13.2b2',
        '17C76a' => '10.13.2b3',
        '17C79a' => '10.13.2b4',
        '17C83a' => '10.13.2b5',
        '17C85a' => '10.13.2b6',
        '17C88' => '10.13.2',
        '17C205' => '10.13.2',
        '17C2205' => '10.13.2',
        '17D20a' => '10.13.3b1',
        '17D25b' => '10.13.3b2',
        '17D29a' => '10.13.3b3',
        '17D34a' => '10.13.3b4',
        '17D39a' => '10.13.3b5',
        '17D46a' => '10.13.3b6',
        '17D2046a' => '10.13.3b6',
        '17D47' => '10.13.3',
        '17D2047' => '10.13.3',
        '17D102' => '10.13.3',
        '17D2102' => '10.13.3',
        '17E139j' => '10.13.4b1',
        '17E150f' => '10.13.4b2',
        '17E150g' => '10.13.4b2',
        '17E160e' => '10.13.4b3',
        '17E170c' => '10.13.4b4',
        '17E182a' => '10.13.4b5',
        '17E190a' => '10.13.4b6',
        '17E197a' => '10.13.4b7',
        '17E199' => '10.13.4',
        '17F35e' => '10.13.5b1',
        '17F45c' => '10.13.5b2',
        '17F59b' => '10.13.5b3',
        '17F66a' => '10.13.5b4',
        '17F70a' => '10.13.5b5',
        '17F77' => '10.13.5',
        '17G31f' => '10.13.6b1',
        '17G39b' => '10.13.6b2',
        '17G47b' => '10.13.6b3',
        '17G54a' => '10.13.6b4',
        '17G65' => '10.13.6',
        '17G2208' => '10.13.6',
        '15P6703' => '10.13.6',
        '17G2307' => '10.13.6',
        '15P6805' => '10.13.6',

        '18A293u' => '10.14b1',
        '18A314h' => '10.14b2',
        '18A326g' => '10.14b3',
        '18A326h' => '10.14b3',
        '18A336e' => '10.14b4',
        '18A347e' => '10.14b5',
        '18A353d' => '10.14b6',
        '18A365a' => '10.14b7',
        '18A371a' => '10.14b8',
        '18A377a' => '10.14b9',
        '18A384a' => '10.14b10',
        '18A389' => '10.14b11',
        '18A391' => '10.14',
        '18B45d' => '10.14.1b1',
        '18B50c' => '10.14.1b2',
        '18B57c' => '10.14.1b3',
        '18B67a' => '10.14.1b4',
        '18B73a' => '10.14.1b5',

        '18B75' => '10.14.1',
        '18B2107' => '10.14.1',
        '18B3094' => '10.14.1',

        '17G4005' => '10.14.2b1',
        '16G1704' => '10.14.2b1',
        '18C31g' => '10.14.2b1',
        '18C38b' => '10.14.2b2',
        '18C48a' => '10.14.2b3',
        '18C52a' => '10.14.2b4',
        '18C54' => '10.14.2',
        '18D21c' => '10.14.3b1',
        '18D32a' => '10.14.3b2',

        '18D42' => '10.14.3',
        '18D43' => '10.14.3',
        '18D109' => '10.14.3',

        '18E174f' => '10.14.4b1',
        '18E184e' => '10.14.4b2',
        '18E194d' => '10.14.4b3',
        '18E205e' => '10.14.4b4',
        '18E215a' => '10.14.4b5',
        '18E220a' => '10.14.4b6',

        '18E226' => '10.14.4',
        '18E227' => '10.14.4',

        '18F96h' => '10.14.5b1',
        '18F108f' => '10.14.5b2',
        '18F118d' => '10.14.5b3',
        '18F127a' => '10.14.5b4',
        '18F131a' => '10.14.5b5',
        '18F132' => '10.14.5',

        '18G29g' => '10.14.6b1',
        '18G48f' => '10.14.6b2',
        '18G59b' => '10.14.6b3',
        '18G71a' => '10.14.6b4',
        '18G78a' => '10.14.6b5',

        '18G84' => '10.14.6',
        '18G87' => '10.14.6',
        '18G95' => '10.14.6',
        '18G103' => '10.14.6',

        '19A471t' => '10.15b1',
        '19A487l' => '10.15b2',
        '19A501i' => '10.15b3',
        '19A512f' => '10.15b4',
        '19A526h' => '10.15b5',
        '19A536g' => '10.15b6',
        '19A546d' => '10.15b7',
        '19A558d' => '10.15b8',
        '19A573a' => '10.15b9',
        '19A578c' => '10.15b10',

        '19A582a' => '10.15',
        '19A583' => '10.15',
        '19A602' => '10.15',
        '19A603' => '10.15',

        '19B68f' => '10.15.1b1',
        '19B77a' => '10.15.1b2',
        '19B86a' => '10.15.1b3',

        '19B88' => '10.15.1',

        '19C32e' => '10.15.2b1',
        '19C39d' => '10.15.2b2',
        '19C46a' => '10.15.2b3',
        '19C56a' => '10.15.2b4',

        '19C57' => '10.15.2',

        '19D49f' => '10.15.3b1',
        '19D62e' => '10.15.3b2',
        '19D75a' => '10.15.3b3',

        '19D76' => '10.15.3',

        '19E224g' => '10.15.4b1',
        '19E234g' => '10.15.4b2',
        '19E242d' => '10.15.4b3',
        '19E250c' => '10.15.4b4',
        '19E258a' => '10.15.4b5',
        '19E264b' => '10.15.4b5',

        '19E266' => '10.15.4',

        '19F53f' => '10.15.5b1',
        '19F62f' => '10.15.5b2',
        '19F72f' => '10.15.5b3',
        '19F83c' => '10.15.5b4',
        '19F94a' => '10.15.5b5',

        '19F96' => '10.15.5',
        '19F101' => '10.15.5',

        '19G36e' => '10.15.6b1',
        '19G46c' => '10.15.6b2',
        '19G60d' => '10.15.6b3',
        '19G71a' => '10.15.6b4',

        '19G73' => '10.15.6',
        '19G2021' => '10.15.6.1',
        '19G2531' => '10.15.6.2',

        '19H2' => '10.15.7',
        '19H15' => '10.15.7.1',

        '20A4299v' => '11.0b1',
        '20A4300b' => '11.0b2',
        '20A5323l' => '11.0b3',
        '20A5343i' => '11.0b4',
        '20A5354i' => '11.0b5',
        '20A5364e' => '11.0b6',
        '20A5374g' => '11.0b7',
        '20A5374i' => '11.0b8',
        '20A5384c' => '11.0b9',
        '20A5395g' => '11.0b10',

        '20B5012d' => '11.0.1b1',
        '20B5022a' => '11.0.1rc',
        '20B28' => '11.0.1rc2',

        '20B29' => '11.0.1',
        '20B50' => '11.0.1',

        '20C5048k' => '11.1b1',
        '20C5061b' => '11.1b2',

        '20C69' => '11.1',

        '20D5029f' => '11.2b1',
        '20D5042d' => '11.2b2',
        '20D53' => '11.2rc',
        '20D62' => '11.2rc2',

        '20D64' => '11.2',
        '20D74' => '11.2.1',
        '20D75' => '11.2.1',
        '20D80' => '11.2.2',
        '20D91' => '11.2.3',

        '20E5172i' => '11.3b1',
        '20E5186d' => '11.3b2',
        '20E5196f' => '11.3b3',
        '20E5210c' => '11.3b4',
        '20E5217a' => '11.3b5',
        '20E5224a' => '11.3b6',
        '20E5229a' => '11.3b7',
        '20E5231a' => '11.3b8',

        '20E232' => '11.3',
        '20E241' => '11.3.1',

        '20F5046g' => '11.4b1',
        '20F5055c' => '11.4b2',
        '20F5065a' => '11.4b3',

        '20F71' => '11.4',

        '20G5023d' => '11.5b1',
        '20G5033c' => '11.5b2',
        '20G5042c' => '11.5b3',
        '20G5052c' => '11.5b4',
        '20G5065a' => '11.5b5',
        '20G70' => '11.5rc',

        '20G71' => '11.5',
        '20G80' => '11.5.1',
        '20G95' => '11.5.2',
        '20G165' => '11.6',

        '20G211' => '11.6.1rc',
        '20G214' => '11.6.1rc2',
        '20G219' => '11.6.1rc3',
        '20G221' => '11.6.1rc4',

        '20G224' => '11.6.1',

        '20G303' => '11.6.2rc',
        '20G306' => '11.6.2rc2',
        '20G311' => '11.6.2rc3',
        '20G313' => '11.6.2rc4',

        '20G314' => '11.6.2',

        '20G405' => '11.6.3rc',
        '20G409' => '11.6.3rc2',
        '20G413' => '11.6.3rc3',

        '20G415' => '11.6.3',

        '20G507' => '11.6.4rc',

        '20G417' => '11.6.4',

        '20G517' => '11.6.5rc2',
        '20G521' => '11.6.5rc3',
        '20G525' => '11.6.5rc4',
        '20G526' => '11.6.5rc5',

        '20G527' => '11.6.5',

        '20G604' => '11.6.6rc',
        '20G608' => '11.6.6rc2',
        '20G614' => '11.6.6rc3',
        '20G618' => '11.6.6rc4',
        '20G623' => '11.6.6rc5',

        '20G624' => '11.6.6',

        '20G704' => '11.6.7rc',
        '20G710' => '11.6.7rc2',

        '20G630' => '11.6.7',

        '20G715' => '11.6.8rc3',
        '20G720' => '11.6.8rc4',
        '20G725' => '11.6.8rc5',
        '20G728' => '11.6.8rc6',

        '20G730' => '11.6.8',

        '20G817' => '11.7',

        '20G908' => '11.7.1rc',
        '20G912' => '11.7.1rc2',
        '20G916' => '11.7.1rc3',

        '20G918' => '11.7.1',

        '20G1008' => '11.7.2rc',
        '20G1011' => '11.7.2rc2',

        '20G1020' => '11.7.2',

        '20G1102' => '11.7.3rc',
        '20G1113' => '11.7.3rc2',

        '20G1116' => '11.7.3',
        '20G1120' => '11.7.4',

        '20G1205' => '11.7.5rc',
        '20G1210' => '11.7.5rc2',
        '20G1215' => '11.7.5rc3',
        '20G1220' => '11.7.5rc4',

        '20G1225' => '11.7.5',

        '20G1329' => '11.7.6rc',

        '20G1231' => '11.7.6',

        '20G1332' => '11.7.7rc2',
        '20G1338' => '11.7.7rc3',
        '20G1342' => '11.7.7rc4',

        '20G1345' => '11.7.7',

        '20G1403' => '11.7.8rc',
        '20G1407' => '11.7.8rc2',

        '20G1413' => '11.7.9rc3',
        '20G1416' => '11.7.9rc4',
        '20G1424' => '11.7.9rc5',

        '21A5248p' => '12.0b1',
        '21A5268h' => '12.0b2',
        '21A5284e' => '12.0b3',
        '21A5294g' => '12.0b4',
        '21A5304g' => '12.0b5',
        '21A5506j' => '12.0b6',
        '21A5522h' => '12.0b7',
        '21A5534d' => '12.0b8',
        '21A5543b' => '12.0b9',
        '21A5552a' => '12.0b10',

        '21A344' => '12.0',

        '21A558' => '12.0.1rc',

        '21A559' => '12.0.1',

        '21C5021h' => '12.1b1',
        '21C5031d' => '12.1b2',
        '21C5039b' => '12.1b3',
        '21C5045a' => '12.1b4',

        '21C51' => '12.1rc',

        '21C52' => '12.1',

        '21D5025f' => '12.2b1',
        '21D5039d' => '12.2b2',

        '21D48' => '12.2rc',

        '21D49' => '12.2',
        '21D62' => '12.2.1',

        '21E5196i' => '12.3b1',
        '21E5206e' => '12.3b2',
        '21E5212f' => '12.3b3',
        '21E5222a' => '12.3b4',
        '21E5227a' => '12.3b5',

        '21E230' => '12.3',
        '21E258' => '12.3.1',

        '21F5048e' => '12.4b1',
        '21F5058e' => '12.4b2',
        '21F5063e' => '12.4b3',
        '21F5071b' => '12.4b4',

        '21F79' => '12.4',

        '21G5027d' => '12.5b1',
        '21G5037d' => '12.5b2',
        '21G5046c' => '12.5b3',
        '21G5056b' => '12.5b4',
        '21G5063a' => '12.5b5',

        '21G69' => '12.5rc',

        '21G72' => '12.5',
        '21G83' => '12.5.1',

        '21G115' => '12.6',

        '21G207' => '12.6.1rc',
        '21G211' => '12.6.1rc2',
        '21G215' => '12.6.1rc3',

        '21G217' => '12.6.1',

        '21G309' => '12.6.2rc',
        '21G312' => '12.6.2rc2',
        '21G317' => '12.6.2rc3',

        '21G320' => '12.6.2',

        '21G403' => '12.6.3rc',
        '21G417' => '12.6.3rc2',

        '21G419' => '12.6.3',

        '21G506' => '12.6.4rc',
        '21G511' => '12.6.4rc2',
        '21G516' => '12.6.4rc3',
        '21G521' => '12.6.4rc4',

        '21G526' => '12.6.4',

        '21G630' => '12.6.5rc',

        '21G531' => '12.6.5',

        '21G633' => '12.6.6rc2',
        '21G639' => '12.6.6rc3',
        '21G644' => '12.6.6rc4',

        '21G646' => '12.6.6',

        '21G703' => '12.6.7rc',
        '21G708' => '12.6.7rc2',

        '21G651' => '12.6.7',

        '21G713' => '12.6.8rc',
        '21G716' => '12.6.8rc2',
        '21G724' => '12.6.8rc3',

        '21G725' => '12.6.8',

        '22A5266r' => '13.0b1',
        '22A5286j' => '13.0b2',
        '22A5295h' => '13.0b3',
        '22A5295i' => '13.0b3',
        '22A5311f' => '13.0b4',
        '22A5321d' => '13.0b5',
        '22A5331f' => '13.0b6',
        '22A5342f' => '13.0b7',
        '22A5352e' => '13.0b8',
        '22A5358e' => '13.0b9',
        '22A5365d' => '13.0b10',
        '22A5373b' => '13.0b11',

        '22A379' => '13.0rc',

        '22A380' => '13.0',
        '22A400' => '13.0.1',

        '22C5033e' => '13.1b1',
        '22C5044e' => '13.1b2',
        '22C5050e' => '13.1b3',
        '22C5059b' => '13.1b4',

        '22C65' => '13.1',

        '22D5027d' => '13.2b1',
        '22D5038i' => '13.2b2',

        '22D49' => '13.2',
        '22D68' => '13.2.1',

        '22E5219e' => '13.3b1',
        '22E5230e' => '13.3b2',
        '22E5236f' => '13.3b3',
        '22E5246b' => '13.3b4',

        '22E252' => '13.3',
        '22E261' => '13.3.1',

        '22F5027f' => '13.4b1',
        '22F5037d' => '13.4b2',
        '22F5049e' => '13.4b3',
        '22F5059b' => '13.4b4',

        '22F62' => '13.4rc',
        '22F63' => '13.4rc2',

        '22F66' => '13.4',
        '22F82' => '13.4.1',

        '22G5027e' => '13.5b1',
        '22G5038d' => '13.5b2',
        '22G5048d' => '13.5b3',
        '22G5059d' => '13.5b4',
        '22G5072a' => '13.5b5',

        '22G74' => '13.5',
        '22G90' => '13.5.1',

        '23A5257q' => '14.0b1',
        '23A5276g' => '14.0b2',
        '23A5286g' => '14.0b3',
        '23A5286i' => '14.0b3',
        '23A5301g' => '14.0b4',
        '23A5301h' => '14.0b4',
        '23A5312d' => '14.0b5',
        '23A5328b' => '14.0b6',
    ];
}
