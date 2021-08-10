$(function(){
  const t = $("#append-test").text().trim()
  console.log(t)
  editormd.markdownToHTML('preview-text', {
    markdown: t,
    emoji           : true,
    taskList        : true,
    tex             : true,  // 默认不解析
    flowChart       : true,  // 默认不解析
    sequenceDiagram : true,  // 默认不解析
    
  })
  
})
