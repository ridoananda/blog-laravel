$(function(){
  const t = $("#append-test").text()
  editormd.markdownToHTML('preview-text', {
    markdown: text,
    emoji           : true,
    taskList        : true,
    tex             : true,  // 默认不解析
    flowChart       : true,  // 默认不解析
    sequenceDiagram : true,  // 默认不解析
    
  })
  
})
