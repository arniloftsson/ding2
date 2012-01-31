api = 2
core = 7.x

projects[ctools][subdir] = "contrib"
projects[ctools][version] = "1.0-rc1"
projects[ctools][patch][] = "http://drupal.org/files/issues/user_edit_form-p0-format-1184168.patch"

projects[relation][subdir] = "contrib"
projects[relation][version] = "1.0-beta1"

; Ding!
projects[ding_entity][type] = "module"
projects[ding_entity][download][type] = "git"
projects[ding_entity][download][url] = "git@github.com:ding2/ding_entity.git"
projects[ding_entity][download][tag] = "7.x-0.6"

projects[ting][type] = "module"
projects[ting][download][type] = "git"
projects[ting][download][url] = "git@github.com:ding2/ting.git"
projects[ting][download][tag] = "7.x-0.20"
