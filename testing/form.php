<!DOCTYPE html>
<html>

<body>


    <form action="upload1.php" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>s
                <td>Select Photo (one or multiple):</td>
                <td><input type="file" name="files[]" multiple /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Create Gallery" id="selectedButton" /></td>
            </tr>
        </table>
    </form>

    <!-- <form action="upload1.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" multiple>
        <input type="submit" value="Upload Image" name="submit">
    </form> -->

</body>

</html>