<?php
!function_exists('readover') && exit('Forbidden');

$lang['other'] = array(
	'invite'			=> '邀请注册',
	'invite_content'	=> '您好:\r\n\t这里是 $GLOBALS[db_bbsname] 论坛，欢迎使用邀请注册插件，点击以下连接，您就可以顺利完成注册！\r\n'
							. '链接地址:$GLOBALS[db_bbsurl]/$GLOBALS[db_registerfile]?invcode={$GLOBALS[invcode][invcode]}。\r\n\r\n'
							. '$GLOBALS[db_bbsname] 欢迎你!',

	'men'				=> '先生',
	'women'				=> '小姐',
	'indexbirth'		=> ',今天 $L[age] 周岁了,生日快乐!',
	'medal_reason'		=> '过期',
	'metal_cancel'		=> '收回勋章通知',
	'metal_cancel_text'	=> '您的勋章被收回\n\n勋章名称：{$L[medalname]}\n操作:SYSTEM\n理由：过期',
	'send_content'		=> ':\n 今天是你 $L[age] 岁生日,祝你生日快乐!',
	'send_title'		=> '祝你生日快乐',
	'js_close'			=> '该网站没有开启首页调用功能，需要到"论坛模式=>界面设置=>调用设置"开启',
	'js_bindurl'		=> '非法调用，系统限制了允许调用论坛内容的域名。',
	'js_totalmember'	=> '会员总数',
	'js_newmember'		=> '最新注册会员',
	'js_topic'			=> '主题数',
	'js_article'		=> '帖子数',
	'js_today'			=> '今 日',
	'js_yesterday'		=> '昨 日',
	'js_highday'		=> '最高日',
	'js_online'			=> '在线总数',
	'js_onlinemen'		=> '会员数',
	'js_onlineguest'	=> '游客数',
	'js_highonline'		=> '最高在线',
	'js_happen'			=> '发生在',
	'js_replies'		=> '回复',
	'js_hits'			=> '点击',
	'home_detail'		=> '详细',
	'home_mentotal'		=> '会员总数',
	'home_newmember'	=> '最新注册会员',
	'home_topics'		=> '主题数',
	'home_topic'		=> '主题',
	'home_posts'		=> '帖子数',
	'home_reply'		=> '含回帖',
	'home_today'		=> '今 日',
	'home_guan'			=> '灌了',
	'home_tie'			=> '帖',
	'home_yesterday'	=> '昨 日',
	'home_hposts'		=> '最高日',
	'home_usertotal'	=> '在线总数',
	'home_ren'			=> '人',
	'home_userinbbs'	=> '会员数',
	'home_guestinbbs'	=> '游客数',
	'home_higholnum'	=> '最高在线',
	'home_happen'		=> '发生在',
	'home_postnum'		=> '帖数',
	'home_rvrc'			=> '威望',
	'home_money'		=> '金钱',
	'home_forums'		=> '版块',
	'home_user'			=> '用户',
	'home_more'			=> '更多',
	'affect'			=> '积分影响：',
	'judg_1'			=> '正方获胜',
	'judg_2'			=> '反方获胜',
	'judg_3'			=> '双方战平',
	'debate_1'			=> '给正方投票成功!',
	'debate_2'			=> '给反方投票成功!',
	'debate_vote' 		=> '投票成功!',
	'debate_mreply' 	=> '编辑完成',
	'debate_dreply' 	=> '删除成功!',
	'succeed_order' 	=> '已完成订单',
	'sort_post'			=> '发帖',
	'sort_digests'		=> '精华',
	'sort_rvrc'			=> '$GLOBALS[db_rvrcname]',
	'sort_money'		=> '$GLOBALS[db_moneyname]',
	'sort_tpost'		=> '今日发帖',
	'sort_mpost'		=> '本月发帖',
	'sort_credit'		=> '$GLOBALS[db_creditname]',
	'sort_topic'		=> '主题',
	'sort_article'		=> '文章',
	'sort_reply'		=> '回复',
	'sort_hit'			=> '人气',
	'sort_digest'		=> '精华帖',
	'sort_onlinetime'	=> '在线时间',
	'sort_postnum'		=> '发帖',
	'sort_todaypost'	=> '今日发帖',
	'sort_monthpost'	=> '本月发帖',
	'sort_monoltime'	=> '本月在线',
	'sort_replies'		=> '回复',
	'sort_hits'			=> '人气',
	'sort_digests'		=> '精华帖',
	'sort_currency'		=> '$GLOBALS[db_currencyname]',
	'sort_f_num'		=> '朋友数',

	'mawhole_copy'		=> '本帖被 $GLOBALS[windid] 从 {$GLOBALS[forum][$GLOBALS[fid]][name]} 复制到本区($GLOBALS[mgdate])',
	'mawhole_move'		=> '本帖被 $GLOBALS[windid] 从 {$GLOBALS[forum][$GLOBALS[fid]][name]} 移动到本区($GLOBALS[mgdate])',
	'mawhole_top_1'		=> '本帖被 $GLOBALS[windid] 执行取消置顶操作($GLOBALS[mgdate])',
	'mawhole_top_2'		=> '本帖被 $GLOBALS[windid] 执行置顶操作($GLOBALS[mgdate])',
	'mawhole_digest_1'	=> '本帖被 $GLOBALS[windid] 执行取消精华操作($GLOBALS[mgdate])',
	'mawhole_digest_2'	=> '本帖被 $GLOBALS[windid] 设置为精华($GLOBALS[mgdate])',
	'mawhole_locked_0'	=> '本帖被 $GLOBALS[windid] 执行取消锁定操作($GLOBALS[mgdate])',
	'mawhole_locked_1'	=> '本帖被 $GLOBALS[windid] 执行锁定操作($GLOBALS[mgdate])',
	'mawhole_locked_2'	=> '本帖被 $GLOBALS[windid] 执行关闭操作($GLOBALS[mgdate])',
	'mawhole_push'		=> '本帖被 $GLOBALS[windid] 执行提前操作($GLOBALS[mgdate])',
	'mawhole_edit_0'	=> '本帖被 $GLOBALS[windid] 执行取消加亮操作($GLOBALS[mgdate])',
	'mawhole_edit_1'	=> '本帖被 $GLOBALS[windid] 执行加亮操作($GLOBALS[mgdate])',
	'mawhole_unite'		=> '本帖被 $GLOBALS[windid] 执行合并操作($GLOBALS[mgdate])',
	'mawhole_down'		=> '本帖被 $GLOBALS[windid] 执行压帖操作($GLOBALS[mgdate])',
	'admin_diy'			=> '常用选项',
	'admin_settingsall' => '所有选项',

	'indexhotimg'       => '社区热图',
	'indexfocus'		=> '社区焦点',
	'catehotimg'		=> '频道焦点',

	'cancle' 			=> '取 消',
	'forumlist_thread' 	=> '选择你要浏览的版块',
	'forumlist_post' 	=> '选择你要发帖的版块',
	'onlinepay_credit'	=> '购买{$L[number]}个[{$L[cname]}]积分',
	'onlinepay_tool'	=> '购买{$L[number]}个[{$L[toolname]}]道具',
	'onlinepay_forum'	=> '购买版块[{$L[fname]}]访问权限{$L[number]}天',
	'onlinepay_group'	=> '购买用户组[{$L[gname]}]身份{$L[number]}天',
	'onlinepay_invite'	=> '购买{$L[number]}个邀请码',

	'bbstitle'			=> '讨论区',
	'homepage'			=> '首页',
	'yesterday'			=> '昨天',
	'hour'				=> '小时前',
	'minute'			=> '分钟前',
	'qiantian'			=> '前天',
	'second'			=> '秒前',

	'weibo'				=> '新鲜事',
	'diary'				=> '日志',
	'photo'				=> '照片',
	'board'				=> '留言',
	'album'				=> '相册',
	'article'			=> '帖子',
	'articlepost'		=> '回复',
	'articlefavor'		=> '收藏',
	'friend'			=> '好友',
	'groups'			=> '群组',
	'articletrade'		=> '商品',
	'groupwrite'		=> '群组记录',

	'ban_diary'			=> '用户被禁言,该日志自动屏蔽！',
	'ban_write'			=> '用户被禁言,该记录自动屏蔽！',
	'ban_article'		=> '用户被禁言,该帖子自动屏蔽！',
	'ban_feed'			=> '用户被禁言,该动态自动屏蔽！',
	'ban_album'			=> '用户被禁言,该相册自动屏蔽！',
	'ban_album_aintro'	=> '用户被禁言,该相册描述自动屏蔽！',
	'ban_photo_pintro'	=> '用户被禁言,该照片描述自动屏蔽！',
	'ban_comment'		=> '用户被禁言,该评论自动屏蔽！',

	'no_group_name'		=> '未分组',

	//7.3.2 End
	'ad_hire'			=> '[出租]',
	'header_subscribe1' => '订阅本帖更新',
	'header_subscribe2' => '订阅本版更新',
	'header_subscribe3' => '订阅全站新帖',

	'topic'				=> '帖子',
	'grouptopic'		=> '群组帖子',
	'groupphoto'		=> '群组照片',
	'group'				=> '群组',
	'user'				=> '用户',

	'indexbirth2'		=> ',即将 $L[age] 周岁了,生日快乐!',

	'share_des_diary' 			=> '分享了一个日志：',
	'share_des_group' 			=> '分享了一个群组：',
	'share_des_groupactive' 	=> '分享了一个群组活动：',
	'share_des_album' 			=> '分享了一个相册：',
	'share_des_photo' 			=> '分享了一张照片：',
	'share_des_user' 			=> '分享了一个用户：',
	'share_des_topic' 			=> '分享了一个主题：',
	'share_des_reply' 			=> '分享了一个回复：',

	'photos'			=> '相册',
	'owrite'			=> '记录',

	'set_invoke_action'	=> '数据来源',
	'set_param_type'	=> '参数设置',
	'whattosay'			=> '想要说点啥？',

	'pushto_index'		=> '首页',
	'pushto_cate'		=> '频道',


	'element_length'	=> '长度(字节)',
	'element_config'	=> '设置',
	'element_image_size'	=> '长宽',
	'element_html'		=> 'html代码',
	'element_titlealt'	=> '标题alt',
	'element_imgurl'	=> '图片链接',
	'element_rebate'	=> '折扣',
	'element_mouthlove'	=> '口味',

	'stopic_edit'		=> '编辑',

	'maketpl_siteinvoke'=> '整站调用',
	'maketpl_forumcommon'=> '版块通用',

	'gender_1'	=> '男',
	'gender_2'	=> '女',
	'profile_gender'	=> '性别',
	'profile_bday'		=> '生日',
	'profile_location'	=> '来自',
	'profile_site'		=> '个人主页',
	'profile_digests'	=> '精华帖子',
	'profile_todaypost'	=> '今日',
	'profile_oicq'		=> 'QQ',
	'profile_yahoo'		=> 'Yahoo',
	'profile_msn'		=> 'MSN',
	'profile_email'		=> 'Email',
	'profile_onlinetime'=> '在线时间',
	'profile_regdate'	=> '注册时间',
	'profile_lastvisit'	=> '最后登录',
	'profile_onlineip'	=> '最后登录IP',
	'profile_regdate'	=> '注册时间',
	'profile_uid'		=> '用户ID',

	'share_video'				=> '分享了一个视频',
	'share_music'				=> '分享了一个音乐',
	'share_web'					=> '分享了一个网页',
	'share_flash'				=> '分享了一个flash',
	'share_user'				=> '分享了一个用户',
	'share_photo'				=> '分享了一张照片',
	'share_album'				=> '分享了一个相册',
	'share_group'				=> '分享了一个群组',
	'share_groupactive'			=> '分享了一个群组活动',
	'share_diary'				=> '分享了一篇日志',
	'share_topic'				=> '分享了一篇主题',
	'share_reply'				=> '分享了一篇回复',

	'posttable'				=> '回复表',

	//7.5RC End
	'pc_defaultmodel'		=> '默认模板',
	'pc_defaultname'		=> '取值范围：',
	'pc_must'				=> '<span class="gray">说明：带<font color="#FF0000">*</font>为必填选项</span>',
	'pc_search'				=> '搜索',
	'pc_asearch'			=> '高级搜索',
	'pc_delimg'				=> '[删除]',
	'pc_limitnum'			=> '无限制',
	'pc_wangwang'			=> '点击这里给我发消息',
	'pc_payed'				=> '已支付',
	'pc_paying'				=> '未支付',
	'pc_id'					=> '序号',
	'pc_username'			=> '用户',
	'pc_name'				=> '真实姓名',
	'pc_mobile'				=> '手机',
	'pc_phone'				=> '电话',
	'pc_address'			=> '地址',
	'pc_zip'				=> '邮编',
	'pc_nums'				=> '数量',
	'pc_totalcash'			=> '费用',
	'pc_message'			=> '留言',
	'pc_ifpay'				=> '支付情况',

	'field_number'			=> '数字',
	'field_text'			=> '字串',
	'field_radio'			=> '单选',
	'field_checkbox'		=> '多选',
	'field_texarea'			=> '文本框',
	'field_select'			=> '下拉框',
	'field_calendar'		=> '日历',
	'field_email'			=> '邮件',
	'field_url'				=> '链接',
	'field_img'				=> '图片',
	'field_upload'			=> '上传',
	'field_range'			=> '取值范围',
    'admin_level'			=> '创始人',
	'rate_type_1'			=> '帖子',
	'rate_type_2'			=> '日志',
	'rate_type_3'			=> '照片',
	'photo_none_desc'		=> '图片暂无描述',
	'edit'					=> '编辑',
	'ajax_edit_way'			=> '(按住Ctrl点击直接进入高级模式)',
	'read_quote_info'		=> '引用回复这个帖子',
	'goods_create_success'	=> '商品分类创建成功！',
	'goods_cate_empty'		=> '抱歉，商品分类名称不能为空！',
	'search_manager_success'=> '帖子删除成功!',
	'share_shield_tpc'      => '抱歉，该内容已屏蔽',
	'upgrade_post'			=> '发帖数',

	//xiami_music
	'music_insert'			=> '插入',
	'music_none1'			=> '没有找到关于',
	'music_none2'			=> '的音乐',
	'invite_custom_des'		=> '感觉还不错。这些功能都很有趣，我想你也会喜欢。',

	//活动
	'act_ifpay_0'			=> '未支付',
	'act_ifpay_1'			=> '已支付',
	'act_ifpay_3'			=> '费用关闭',
	'act_ifpay_4'			=> '已全额退款',
	'act_ordermembernums'	=> '报名人数共计',
	'act_paymembernums'		=> '人，已支付人数：',
	'act_ren'				=> '人',
	'act_id'				=> '序号',
	'act_username'			=> '用户名',
	'act_signupmember'		=> '报名人数',
	'act_nickname'			=> '称呼',
	'act_mobile'			=> '手机',
	'act_telephone'			=> '联系电话',
	'act_address'			=> '地址',
	'act_message'			=> '备注',
	'act_totalcash'			=> '费用',
	'act_ifpay'				=> '状态',
	'act_refund'			=> '(退款)',
	'act_refunded'			=> '已退款',
	'act_add'				=> '(追加)',
	'act_ren'				=> '人',
	'act_yuan'				=> '元',
	'act_exporttime'		=> '统计时间：',
	'act_recommend'			=> '推荐活动',
	'act_signuptime'        => '创建时间',
	'act_topic_more14'		=> '最多14个字节',
	'act_edit'				=> '[编辑]',
	'act_delete'			=> '[删除]',
	'act_view'				=> '[查看]',
	'act_my_activity'       => '我的活动',
	'act_TA_activity'       => 'TA的活动',
	'act_activity_desc'     => '活动描述',
	'act_other'             => '其他',
	'act_add_fee_type'      => '增加费用类型',
	'act_add_fee_detail'    => '增加费用明细',
	'act_delete_type'       => '删除此类型',
	'act_remove_line'       => '移除该行',
	'act_RMB'               => '元',
	'act_people'            => '人',
	'act_yes'               => '是',
	'act_no'                => '否',
	'act_per_people'        => '每位',
	'act_free'              => '免费',
	'act_close'             => '关闭',
	'act_normal'            => '正常',
	'act_all_people'        => '所有人',
	'act_fee_desc'          => '费用说明',
	'act_fee_unit'          => '金额（元）',
	'act_signup_info'       => '已经有$L[alreadySignup]人报名',
	'act_male'              => '男生',
	'act_female'            => '女生',
	'act_unauth_alipay'     => '您还没通过支付宝实名认证，<a href="http://www.alipay.com" target="_blank"><span style="color:red;">立即去认证</span></a>',
	'act_unbind_alipay'     => '您还没绑定支付宝帐号，<a href="act_alipay_push.php?action=user_authentication" target="_blank"><span style="color:red;">立即设置</span></a>',
	'act_upload_img'        => '上传主图',
	'act_upload_img_max'    => '最多上传5张图片，不允许再上传',
	'act_delete_fail'       => '删除失败',
	'act_delete_success'    => '删除成功!',
	'act_activity_type'     => '活动类型：',
	'act_signuper_info'     => '查看报名信息',
	'act_err_unbind_alipay' => '您的支付宝帐号尚未绑定，<a href="act_alipay_push.php?action=user_authentication" target="_blank">立即设置</a>',
	'act_err_author_unbind' => '发起人的支付宝帐号尚未绑定，暂时无法报名',
	'act_err_unauth_alipay' => '您的支付宝帐号尚未通过实名认证，<a href="http://www.alipay.com" target="_blank">立即设置</a>',
	'act_err_author_unpass' => '发起人的支付宝帐号尚未通过实名认证，暂时无法报名',
	'act_err_activity_unNo' => '支付宝AA活动号尚未创建，无法报名，请刷新重试',
	'act_err_alipayinfo_un' => '您的帐号在支付宝资料未填写完整，<a href="http://www.alipay.com" target="_blank">立即填写</a>',
	'act_err_alipayAccount' => '发起人的支付宝帐号出现异常，暂时无法报名',
	'act_err_alipay_freeze' => '您的支付宝帐号被冻结，不能进行活动收款，需要开通这个账号，<a href="http://www.alipay.com" target="_blank">立即设置</a>',
	'act_err_author_freeze' => '发起人的支付宝帐号被冻结，暂时无法报名',
	'act_err_max_activity'  => '您今天发布的支付宝收费活动已经达到上限10个;本活动将从明天开始报名',
	'act_err_max_activity2' => '发起人今天发布的活动数目已达上限;本活动将从明天开始报名',
	'act_err_fail_No'       => '支付宝AA活动号创建失败，暂时无法报名，请刷新重试',
	'act_err_system_error'  => '系统出现异常，暂时无法报名，请刷新重试',

	'act_signup_not_start'  => '报名未开始',
	'act_signup_not_enough' => '活动人数未达到$L人，活动自动取消',
	'act_signup_over'       => '报名已结束',
	'act_activity_over'     => '活动已结束',
	'act_signup_overflow'   => '报名人数已满',
	'act_I_signup'          => '我要报名',
	'act_additional_signup' => '我要补报',

	'act_loading_data'      => '正在加载数据...',

	'act_fee_close_success' => '关闭成功!',
	'act_fee_close_fail'    => '关闭失败，费用已支付',
	'act_fee_close_fail2'   => '关闭失败，系统操作异常',
	'act_fee_op_error'      => '非法操作',
	'act_op_success'        => '操作成功!',
	'act_op_fail'           => '操作失败',

	'act_signup_alert'      => '报名人数至少为1人',
	'act_signup_alert2'     => '您输入的人数过大',
	'act_signup_alert3'     => '称呼和手机必填',
	'act_signup_alert4'     => '总报名人数已超总人数',

	'act_add_fee_success'   => '追加费用成功!',

	'act_recommend'         => '推荐活动',
	'act_cancel_recommend'  => '取消推荐',
	'act_not_right_recommend' => '您没有推荐活动的权限',
	'act_activity_class'     => '所有分类',

	'act_field_activity_date'         => '活动时间',
	'act_field_activity_desc'         => '活动概况',
	'act_field_activity_addr'         => '活动地点',
	'act_field_activity_addr_desc'    => '(多个活动地点用,隔开)',
	'act_field_main_image'            => '主题图片',
	'act_field_main_image2'           => '主题图片二',
	'act_field_main_image3'           => '主题图片三',
	'act_field_main_image4'           => '主题图片四',
	'act_field_main_image5'           => '主题图片五',
	'act_field_main_image_desc'       => '(最多5张，支持gif、jpeg、jpg、bmp、png，小于2M)',
	'act_field_contact'       		  => '联系人',
	'act_field_contact_tel'       	  => '联系电话',
	'act_field_contact_tel_desc'      => '(多个联系电话用,隔开)',
	'act_field_signup_date'       	  => '报名时间',
	'act_field_signup_desc'       	  => '报名说明',
	'act_field_min_people'       	  => '人数限制{@}最少',
	'act_field_max_people'       	  => '最多',
	'act_field_max_people_desc'       => '(留空或0表示没有限制)',
	'act_field_signup_restrict'       => '报名限制',
	'act_field_signup_restrict_select'=> '1=所有用户\n2=仅好友',
	'act_field_other_restrict'        => '请输入其它限制',
	'act_field_gender_restrict'       => '性别限制',
	'act_field_gender_restrict_select'=> '1=全部\n2=仅男生\n3=仅女生',
	'act_field_fee'       		      => '活动费用',
	'act_field_fee_desc'       		  => '(如 小孩 每位 10元，有车族 每位10 元等)',
	'act_field_fee_info'       		  => '费用说明',
	'act_field_fee_detail'       	  => '费用明细',
	'act_field_fee_pay_type'       	  => '支付方式',
	'act_field_fee_pay_type_desc'     => '1=支付宝\n2=现金支付',

);
?>