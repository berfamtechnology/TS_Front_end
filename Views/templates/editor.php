 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/snackbarjs/1.1.0/snackbar.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.tiny.cloud/1/lu5snqekdp5ktk13yyvelun3b18u7dhwy9vaphvr2k47tnn9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/node-snackbar/0.1.16/snackbar.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/node-snackbar/0.1.16/snackbar.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tinymce.init({
            selector: '.myeditablearea',
            width: '100vw',
            menubar: true,
            inline: true,
            skin: "oxide-dark",
            content_css: "dark",
            plugins: [
              'advlist','autolink','preview', 'quickbars', 'textcolor',
              'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks','searchreplace', 'template', 'noneditable',
              'fullscreen','insertdatetime','media','table','help','wordcount', 'directionality', 'emoticons',
              'save', 'autoresize', 'autosave', 'code', 'fullscreen', 'insertdatetime', 'nonbreaking', 'pagebreak','visualblocks','visualchars','wordcount'
            ],
            autosave_restore_when_empty: true,
            //save_enablewhendirty: false,
            noneditable_noneditable_class: 'mceNonEditable',
            statusbar: false,
            toolbar:[ 'undo redo searchreplace save | formatpainter casechange blocks | bold italic backcolor forecolor | ' +
              'alignleft aligncenter alignright alignjustify | template | visualblocks | visualchars | wordcount | ' +
              'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help | restoredraft insertdatetime | ltr rtl | emoticons image link media| fullscreen preview | ' +
              'nonbreaking pagebreak | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol | '
            ],
            save_onsavecallback: () => {
                    let file = $("#file-content").html();
                    console.log("file is : "+file);
                    $.post(window.location, { main: file}, function (data, status) {
                      data = JSON.parse(data);
                      Snackbar.show({
                        text: data["msg"],
                        pos: "top-center",
                        actionTextColor: "#fff",
                        backgroundColor: data["status"] ? "#1abc9c" : "#e7515a",
                      });
                    });
            }
        });
        
    </script>