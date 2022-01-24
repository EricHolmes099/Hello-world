<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>
<body>
    Bonjour
    <div id="top">
       
        <form action="?" method="post" id="mkdir" />
        <label for=dirname>Create New Folder</label><input id=dirname type=text name=name value="" />
        <input type="submit" value="create" />
        </form>

      

       

        <div id="file_drop_target">
            Drag Files Here To Upload
            <b>or</b>
            <input type="file" multiple />
        </div>
       
        <div id="breadcrumb">&nbsp;</div>
    </div>

    <div id="upload_progress"></div>
    <table id="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Size</th>
                <th>Modified</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="list">

        </tbody>
    </table>
</body>
</html>