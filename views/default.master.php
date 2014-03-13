<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head> 
<?php $this->Head->Title('FreePlanet3');?>
<?php $this->RenderAsset('Head'); ?>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'blackglass'
 };
 </script>

<link rel="apple-touch-icon" href="http://freeplanet3.com/apple-touch-icon.png">
<link rel="shortcut icon" href="http://freeplanet3.com/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="http://freeplanet3.com/favicon.png">

</head>
<body id="<?php echo $BodyIdentifier; ?>" class="<?php echo $this->CssClass; ?>">
   <div id="Frame">
      <div id="Head">
<h1><span><?php echo Gdn_Theme::Logo(); ?></span></a></h1>
         <div class="Menu">
				
            <?php
			      $Session = Gdn::Session();
					if ($this->Menu) {
						$this->Menu->AddLink('Dashboard', T('Dashboard'), '/dashboard/settings', array('Garden.Settings.Manage'));
						// $this->Menu->AddLink('Dashboard', T('Users'), '/user/browse', array('Garden.Users.Add', 'Garden.Users.Edit', 'Garden.Users.Delete'));
                                                  $this->Menu->AddLink('Categories', T('Categories'),'categories/all');
                                                  $this->Menu->AddLink('Home', T(Home),'http://www.freeplanet3.com/');
						   $this->Menu->AddLink('Home', T('New Discussion'),'/post/discussion');
                                                  $this->Menu->AddLink('Home', T('Activity'), '/activity');
                                                  $this->Menu->AddLink('Home', T('Forum'),'/');
                                                  $this->Menu->AddLink('Home', T('Contact'),'/contact');
                                                   $this->Menu->RemoveLink('Contact', T('Contact'),'/contact');
                                                   $this->Menu->AddLink('Home', T('Games'), 'plugin/Games');
                                                  $this->Menu->AddLink('Home', T('Earth'),'http://www.freeplanet3.com/earth.html');
                                                  $this->Menu->AddLink('Home', T('FP3 on Facebook'), 'https://www.facebook.com/pages/Free-Planet-3/6486963234?sk=app_128953167177144');
                                                 
                                                 
                                                  $this->Menu->AddLink('Home', T('Mobile View'), 'profile/mobile');
                                                  
                                                  $this->Menu->AddLink('Home', T('Privacy'), 'plugin/PrivacyNotice');
$this->Menu->AddLink('Home', T('Bonk'), 'plugin/Bonk',array('Garden.Settings.manage'),array(),array('target' => '_blank'));
			         $Authenticator = Gdn::Authenticator();
						if ($Session->IsValid()) {
							$Name = $Session->User->Name;
							$CountNotifications = $Session->User->CountNotifications;
							if (is_numeric($CountNotifications) && $CountNotifications > 0)
								$Name .= ' <span>'.$CountNotifications.'</span>';
								
							$this->Menu->AddLink('User', $Name, '/profile/{UserID}/{Username}', array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
							$this->Menu->AddLink('SignOut', T('Sign Out'), $Authenticator->SignOutUrl(), FALSE, array('class' => 'NonTab SignOut'));
						} else {
							$Attribs = array();
							if (C('Garden.SignIn.Popup') && strpos(Gdn::Request()->Url(), 'entry') === FALSE)
								$Attribs['class'] = 'SignInPopup';
								
							$this->Menu->AddLink('Entry', T('Sign In'), $Authenticator->SignInUrl($this->SelfUrl), FALSE, array('class' => 'NonTab'), $Attribs);
						}
						echo $this->Menu->ToString();
					}
				?>
           
         </div>
      </div>
      <div id="Body">
         <div id="Content"><?php $this->RenderAsset('Content'); ?></div>
         <div id="Panel">
<div class="Search"><p><?php
					$Form = Gdn::Factory('Form');
					$Form->InputPrefix = '';
					echo 
						$Form->Open(array('action' => Url('/search'), 'method' => 'get')),
						$Form->TextBox('Search'),
						$Form->Button('Go', array('Name' => '')),
						$Form->Close();
				?></div></p>
<p><ul id="menu-bar">
 <li><a href="#">I N D E X</a>
   <ul>
   <li><a href="http://vanillaforums.org/" target="_blank">Vanilla Forums</a></li>
   <li><a href="http://www.youtube.com" target="_blank">YouTube</a></li>
   <li><a href="http://windowseat.ca/viscosity/" target="_blank">Viscosity Art Generator</a></li>
   <li><a href="http://www.color-hex.com" target="_blank">Color Hex Color Codes</a></li>
  </ul>
 </li>
 </ul>
</p>
<?php $this->RenderAsset('Panel'); ?>
<center><p>
<iframe id="onlineRadioFrame" frameborder="0" width="250" height="292" scrolling="no" src="http://radiotuna.com/OnlineRadioPlayer/Player?showPopupControl=true&amp;playerParams={'styleSelection0':29,'styleSelection1':2,'styleSelection2':7,'textColor':16777215,'backgroundColor':4144959,'buttonColor':1048365,'glowColor':1148365,'playerSize':250,'playerType':'style'}&amp;linkText=internet%20radio&amp;linkDest=http://radiotuna.com/" allowtransparency="true" style="border:none;border-radius:10px;"></iframe></p><p><a href="http://info.flagcounter.com/2sKP"  target="_blank"><img src="http://s10.flagcounter.com/count/2sKP/bg_333333/txt_4DFF00/border_666666/columns_3/maxflags_250/viewers_3/labels_1/pageviews_0/flags_0/" alt="Free counters!" border="0" width="100%"></a></p></center>
</div>
      </div>
     
 <div id="Foot"><div id="FootMenu">
				
            <?php
			      $Session = Gdn::Session();
					if ($this->Menu) {
						$this->Menu->AddLink('New Discussion',T('New Discussion'),'/post/discussion', array('Garden.SignIn.Allow'), array(), array('target' => '_blank'));					
                                                $this->Menu->AddLink('Activity', T('Activity'), '/activity');
                                                $this->Menu->AddLink('Categories', T('Categories'), 'categories/all');
                                                $this->Menu->AddLink('Discussions', T('Discussions'), '/discussions');
                                                $this->Menu->AddLink('Games', T('Games'), 'plugin/Games');
                                                $this->Menu->AddLink('Mobile View', T('Mobile View'), 'profile/mobile');
                                                
                                                $this->Menu->AddLink('Privacy', T('Privacy'), 'plugin/PrivacyNotice');
			         $Authenticator = Gdn::Authenticator();
						if ($Session->IsValid()) {
							
							$this->Menu->AddLink('SignOut', T('Sign Out'), $Authenticator->SignOutUrl(), FALSE, array('class' => 'NonTab SignOut'));
						} else {
							$Attribs = array();
							if (C('Garden.SignIn.Popup') && strpos(Gdn::Request()->Url(), 'entry') === FALSE)
								$Attribs['class'] = 'SignInPopup';
								
							$this->Menu->AddLink('Entry', T('Sign In'), $Authenticator->SignInUrl($this->SelfUrl), FALSE, array('class' => 'NonTab'), $Attribs);
						}
						echo $this->Menu->ToString();
					}
				?>
           
         </div>
<?php $this->RenderAsset('Foot'); 

echo Wrap(Anchor(T('Vanilla Theme by VrijVlinder'), C('Garden.VanillaUrl'),array('target' => '_blank')), 'div');	

?><p></p>	<!-- Begin TranslateThis Button -->

<div id="translate-this"><a style="width:180px;height:18px;display:block;" class="translate-this-button" href="http://www.translatecompany.com/">Translate Company</a></div>
<script type="text/javascript" src="http://x.translateth.is/translate-this.js"></script>
<script type="text/javascript">
TranslateThis();
</script>

<!-- End TranslateThis Button -->

	  </div>
   </div>
<script type="text/javascript"> $(document).ready(function() {
   $(".Attachment a").attr("target", '_blank');
   $("#FootMenu a").attr("target", '_blank');
});
</script>
<script type="text/javascript"> 

$(document).ready(function() {

$('a.MyDiscussions.TabLink').popup();
$('a.MyBookmarks.TabLink').popup();
$('a.TabLink').popup();
$('#Menu ul li:last-child > a').popup();
$('#Foot #Menu li:last > a').popup();
});
</script>
	
<?php $this->FireEvent('AfterBody'); ?>
</body>
</html>