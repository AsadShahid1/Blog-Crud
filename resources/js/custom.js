// import $ from jquery;
// import summernote from summernote;
// $(document).ready(function (){
//    
// })
$('#summernote').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
  
//   summernote
//   .create(document.querySelector('#summernote'))
//             .catch(error => {
//                 console.error(error);
//             });