/**
 * Created by xxh23_000 on 11/22/2016.
 */
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = this.href.split('#');
  $('.nav a').filter('[href="#'+target[1]+'"]').tab('show');
})