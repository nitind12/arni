<div class="<?php echo $cols; ?>">
    <table class="table table-bordered"><tr><td>
    <table class="table table-striped">
        <tr class="info">
            <th colspan="2">DEAN</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $school_contacts[0]->FULL_NAME; ?></td>
        </tr>
        <tr>
            <td>Contact</td>
            <td><a href="tel:<?php echo $school_contacts[0]->MOBILE; ?>"><?php echo $school_contacts[0]->MOBILE; ?></a></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><a href="mailto:<?php echo $school_contacts[0]->EMAIL; ?>"><?php echo $school_contacts[0]->EMAIL; ?></a></td>
        </tr>
    </table>
    </td></tr></table>
</div>