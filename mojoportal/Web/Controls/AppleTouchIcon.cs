﻿using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace mojoPortal.Web.UI;

/// <summary>
/// you could just add the apple touch link directly in layout.master
/// but this control makes it easier to have different icons per skin
/// whereas if you just use the one(s) in the root of the installation then all the sites in the installation would have the same icon
/// so this control could be used in layout.master in the head element and you put the .png file in your skin folder and set the fileName
/// to the name of the .png file
/// by doing this each site could have different icons
/// 
/// http://developer.apple.com/library/safari/#documentation/appleapplications/reference/safariwebcontent/ConfiguringWebApplications/ConfiguringWebApplications.html
/// http://stackoverflow.com/questions/2997437/what-size-should-apple-touch-icon-png-be-for-ipad-and-iphone-4
/// 
/// </summary>
public class AppleTouchIcon : WebControl
{
	public string FileName { get; set; } = string.Empty;

	/// <summary>
	/// valid options are blank, 72x72, 114x114
	/// </summary>
	public string Sizes { get; set; } = string.Empty;

	protected override void Render(HtmlTextWriter writer)
	{
		if (HttpContext.Current == null)
		{
			writer.Write("[" + this.ID + "]");
			return;
		}

		if (FileName.Length == 0) { return; }

		if (Sizes.Length > 0)
		{
			writer.Write("\n<link rel='apple-touch-icon' sizes=\"{0}\" href='{1}{2}' />",
			   Sizes,
			  SiteUtils.DetermineSkinBaseUrl(true, Page),
			  FileName
			  );
		}
		else
		{
			writer.Write("\n<link rel='apple-touch-icon' href='{0}{1}' />",
			   SiteUtils.DetermineSkinBaseUrl(true, Page),
			   FileName
			   );

		}
	}
}