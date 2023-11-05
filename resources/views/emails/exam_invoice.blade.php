<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img
                                src="http://institut-munich.com/wp-content/uploads/2019/09/cropped-logo.jpg"
                                style="width: 100%; max-width: 300px"
                            />
                        </td>

                        <td>
                            Facture #: {{$data['oid']}}<br/>
                            Date: {{$data['date']}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Institut Munich.<br/>
                            Agadir, 80000
                            +212 6 37 25 42 65
                        </td>

                        <td>
                            {{ $data['to_name'] }} <br/>
                            {{ $data['to_email'] }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Méthode de paiement</td>
            <td>Carte de crédit</td>
        </tr>

        <tr class="details">
            <td>Par</td>
            <td>CMI</td>
        </tr>

        <tr class="heading">
            <td>Test</td>
            <td>Prix</td>
        </tr>

        <tr class="item">
            <td>{{ $data['test']->name }}</td>
            <td>{{ $data['test']->price }} DH</td>
        </tr>

        @if($data['test']->course_id)
            <tr class="item">
                <td>{{ $data['test']->course->level }}</td>
                <td>{{ $data['test']->course->price }} DH</td>
            </tr>
        @endif

        <tr class="item last">
            <td>Tax</td>
            <td>0DH</td>
        </tr>

        <tr class="total">
            <td></td>
            <td>Total: <b>{{ $data['amount'] }} DH</b></td>
        </tr>
    </table>
</div>
</body>
</html>
