<div class="span9">
    <h1>Create New Voucher</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" id="VoucherFormCreate">
    <table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            Voucher Name
        </td>
        <td>
            <input type="text" id="" name="voucher_main_text" class="span12" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Voucher sub text
        </td>
        <td>
            <input type="text" id="" name="voucher_sub_text" class="span12" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Voucher Icon
        </td>
        <td>
            <input type="file" id="" name="voucher_icon_image" class="" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Voucher Main Image
        </td>
        <td>
            <input type="file" id="" name="voucher_main_image" class="" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Start Date
        </td>
        <td>
            <div id="" class="input-append date datetimepicker">
                <input name="voucher_start_date" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            End Date
        </td>
        <td>
            <div id="" class="input-append date datetimepicker">
                <input name="voucher_end_date" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            Expiry Date
        </td>
        <td>
            <div id="" class="input-append date datetimepicker">
                <input name="voucher_expiry_at" class="disabled" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
                <span class="add-on">
                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            quantity
        </td>
        <td>
            <input type="text" id="" name="voucher_quantity" class="span12" required="required">
        </td>
    </tr>
    <tr>
        <td>
            Voucher Code
        </td>
        <td>
            <input type="text" id="" name="voucher_code" class="span12" placeholder="Optional">
        </td>
    </tr>
    <tr>
        <td>
            Hongbao type
        </td>
        <td>
            <select name="hong_bao_type" id="" required="required">
                <option value="" class=""> --- </option>
                <option value="red" class="">Red</option>
                <option value="gold" class="">Gold</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Priority
        </td>
        <td>
            <input type="text" id="" name="voucher_chance" class="span12" placeholder="default: 1">
            <p class="muted">Default: 1</p>
        </td>
    </tr>
    <tr>
        <td>
            Description
        </td>
        <td>
            <textarea name="voucher_description"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Terms and Conditions
        </td>
        <td>
            <textarea id="" name="voucher_toc"></textarea>
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    <h3>Merchant Information</h3>
    <table class="table table-striped">
        <tr>
            <td>merchant_name</td>
            <td>
                <input type="text" id="" name="merchant_name" class="span12" required="required">
            </td>
        </tr>
        <tr>
            <td>location</td>
            <td>
                <input type="text" id="" name="merchant_location" class="span12" required="required">
            </td>
        </tr>
        <tr>
            <td>contact</td>
            <td>
                <input type="text" id="" name="merchant_contact" class="span12" required="required" placeholder="eg. 67676767">
            </td>
        </tr>
        <tr>
            <td>email</td>
            <td>
                <input type="text" id="" name="merchant_email" class="span12" required="required" placeholder="eg. email@mail.com">
            </td>
        </tr>
        <tr>
            <td>website</td>
            <td>
                <input type="text" id="" name="merchant_website" class="span12">
            </td>
        </tr>
    </table>
    <input type="submit" class="btn btn-success" value="Create Voucher">
    </form>
</div>